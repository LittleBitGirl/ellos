<?php


namespace Webkul\Shop\Http\Controllers;

use Illuminate\Http\Request;
use Webkul\Category\Repositories\CategoryRepository;
use Webkul\Product\Repositories\AchievementRepository;

class ProductsCategoriesProxyController extends Controller
{
    /**
     * CategoryRepository object
     *
     * @var CategoryRepository
     */
    protected $categoryRepository;

    /**
     * ProductRepository object
     *
     * @var AchievementRepository
     */
    protected $productRepository;

    /**
     * Create a new controller instance.
     *
     * @param Webkul\Category\Repositories\CategoryRepository $categoryRepository
     * @param Webkul\Product\Repositories\ProductRepository   $productRepository
     *
     * @return void
     */
    public function __construct(
        CategoryRepository $categoryRepository,
        AchievementRepository $productRepository
    )
    {
        $this->categoryRepository = $categoryRepository;

        $this->productRepository = $productRepository;

        parent::__construct();
    }

    /**
     * Show product or category view. If neither category nor product matches,
     * abort with code 404.
     *
     * @param Request $request
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $slugOrPath = trim($request->getPathInfo(), '/');

        if (preg_match('/^([a-z0-9-]+\/?)+$/', $slugOrPath)) {

            if ($category = $this->categoryRepository->findByPath($slugOrPath)) {

                return view($this->_config['category_view'], compact('category'));
            }

            if ($product = $this->productRepository->findBySlug($slugOrPath)) {

                $customer = auth()->guard('customer')->user();

                return view($this->_config['product_view'], compact('product', 'customer'));
            }

        }

        abort(404);
    }
}