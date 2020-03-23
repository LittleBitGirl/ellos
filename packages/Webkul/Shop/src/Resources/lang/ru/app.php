<?php

return [
    'invalid_vat_format' => 'The given vat id has a wrong format',
    'security-warning' => 'Suspicious activity found!!!',
    'nothing-to-delete' => 'Nothing to delete',

    'layouts' => [
        'my-account' => 'Мой аккаунт',
        'profile' => 'Профиль',
        'address' => 'Адрес',
        'reviews' => 'Отзывы',
        'wishlist' => 'Список желаний',
        'orders' => 'Заказы',
        'downloadable-products' => 'Товары для скачивания'
    ],

    'common' => [
        'error' => 'Что-то пошло не так. Пожалуйста попробуйте позже.',
        'no-result-found' => 'Мы не нашли ничего :(.'
    ],

    'home' => [
        'page-title' => config('app.name') . ' - Главная',
        'featured-products' => 'Рекомендуемые товары',
        'new-products' => 'Новые товары',
        'verify-email' => 'Подтвердить свою учетную запись электронной почты',
        'resend-verify-email' => 'Повторно отправить письмо подтверждения'
    ],

    'header' => [
        'title' => 'Аккаунт',
        'dropdown-text' => 'Управление корзиной, заказами и пожеланиями',
        'sign-in' => 'Войти',
        'sign-up' => 'Зарегистрироваться',
        'account' => 'Аккаунт',
        'cart' => 'Корзина',
        'profile' => 'Профиль',
        'wishlist' => 'Список желаний',
        'cart' => 'Корзина',
        'logout' => 'Выйти',
        'search-text' => 'Поиск продуктов здесь'
    ],

    'minicart' => [
        'view-cart' => 'Просмотреть корзину',
        'checkout' => 'Заказать',
        'cart' => 'Корзина',
        'zero' => '0'
    ],

    'footer' => [
        'subscribe-newsletter' => 'Подписаться на новости',
        'subscribe' => 'Подписаться',
        'locale' => 'Язык',
        'currency' => 'Валюта',
    ],

    'subscription' => [
        'unsubscribe' => 'Отписаться',
        'Подписаться' => 'Подписаться',
        'subscribed' => 'Вы подписаны на электронные письма подписки.',
        'not-subscribed' => 'Вы не можете подписаться на электронные письма подписки, повторите попытку позже.',
        'already' => 'Вы уже подписаны на наш список подписки.',
        'unsubscribed' =>'Вы отменили подписку на рассылочные письма.',
        'ready-unsub '=>' Вы уже отписались. ',
        'not-subscribed' => 'Ошибка! Почта не может быть отправлена в настоящее время, попробуйте позже. '
    ],

    'search' => [
        'no-results' => 'Результаты не найдены',
        'page-title' => config ('app.name'). '- Поиск',
        'found-results' => 'Результаты поиска найдены',
        'found-result' => 'Результат поиска найден'
    ],

    'reviews' => [
        'title' => 'Заголовок',
        'add-review-page-title' => 'Добавить отзыв',
        'write-review' => 'Написать отзыв',
        'review-title' => 'Дайте вашему отзыву заголовок',
        'product-review-page-title' => 'Отзыв на товар',
        'rating-reviews' => 'Рейтинг и Отзывы',
        'submit' => 'ОТПРАВИТЬ',
        'delete-all' => 'Все отзывы удалены успешно',
        'ratingreviews' => ':rating рейтинг & :review отзывов',
        'star' => 'Звезда',
        'percentage' => ':percentage %',
        'id-star' => 'звезда',
        'name' => 'Имя',
    ],

    'customer' => [
        'signup-text' => [
            'account_exists' => 'Уже есть аккаунт',
            'title' => 'Войти'
        ],

        'signup-form' => [
            'page-title' => 'Создать новую учетную запись клиента',
            'title' => 'Зарегистрироваться',
            'firstname' => 'Имя',
            'фамилия' => 'Фамилия',
            'email' => 'Email',
            'password' => 'пароль',
            'verify_pass' => 'Подтвердить пароль',
            'button_title' => 'Регистрация',
            'согласен' => 'согласен',
            'Terms' => 'Условия',
            'conditions' => 'Условия',
            'using'=> 'используя этот сайт',
            'соглашение' => 'Соглашение',
            'success' => 'Аккаунт успешно создан.',
            'success-verify' => 'Аккаунт успешно создан, электронное письмо отправлено для проверки.',
            'success-verify-email-unsent' => 'Аккаунт успешно создан, но электронное письмо с подтверждением отправлено.',
            'failed' => 'Ошибка! Не можете создать свой аккаунт, попробуйте позже. ',
            'Уже подтвержден' => 'Ваш аккаунт уже подтвержден. Или попробуйте отправить новое письмо с подтверждением еще раз.',
            'verify-not-sent' => 'Ошибка! Проблема с отправкой подтверждающего электронного письма, повторите попытку позже. ',
            'verify-sent' => 'Письмо с подтверждением отправлено',
            'Verified' => 'Ваша учетная запись была подтверждена, попробуйте войти.',
            'verify-failed' => 'Мы не можем подтвердить ваш почтовый аккаунт.',
            'dont-have-account' => 'У вас нет учетной записи.',
            'success' => 'Аккаунт успешно создан',
            'success-verify' => 'Аккаунт успешно создан, электронное письмо отправлено для проверки.',
            'success-verify-email-unsent' => 'Учетная запись успешно создана, но электронное письмо с подтверждением отправлено',
            'failed' => 'Ошибка! Невозможно создать аккаунт, попробуйте позже',
            'Уже подтверждено' => 'Ваш аккаунт уже подтвержден или попробуйте отправить новое письмо с подтверждением еще раз',
            'verify-not-sent' => 'Ошибка! Проблема при отправке письма с подтверждением, попробуйте позже',
            'verify-sent' => 'Письмо с подтверждением отправлено',
            'verify' => 'Ваша учетная запись была проверена, попробуйте войти сейчас',
            'verify-failed' => 'Мы не можем подтвердить ваш почтовый аккаунт',
            'dont-have-account' => 'У вас нет учетной записи на нашем сайте.',
            'customer-registration' => 'Клиент успешно зарегистрирован!'
        ],

        'login-text' => [
            'no_account' => 'Нет учетной записи',
            'title' => 'Зарегистрироваться',
        ],

        'login-form' => [
            'page-title' => 'Логин клиента',
            'title' => 'Войти',
            'email' => 'Email',
            'password' => 'Пароль',
            'Forgot_pass' => 'Забыли пароль?',
            'button_title' => 'Войти',
            'запомнить' => 'Запомнить меня',
            'footer' => '© Авторское право :year Webkul Software, Все права защищены',
            'invalid-creds' => 'Пожалуйста, проверьте свои учетные данные и повторите попытку.',
            'verify-first' => 'Сначала проверьте свою учетную запись электронной почты.',
            'not-activated' => 'Ваша активация требует одобрения администратора',
            'resend-verify' => 'Повторно отправить письмо-подтверждение еще раз'
        ],

        'forgot-password' => [
            'title' => 'Восстановить пароль',
            'email' => 'Email',
            'submit' => 'Отправить сброс пароля на электронную почту',
            'page_title' => 'Забыли пароль?'
        ],

        'reset-password' => [
            'title' => 'Сброс пароля',
            'email' => 'Зарегистрированный Email',
            'password' => 'Пароль',
            'confirm-password' => 'Подтвердите пароль',
            'back-link-title' => 'Вернуться к входу в систему',
            'submit-btn-title' => 'Сбросить пароль'
        ],

        'account' => [
            'dashboard' => 'Редактировать профиль',
            'menu' => 'Меню',

            'profile' => [
                'index' => [
                    'page-title' => 'Профиль',
                    'title' => 'Профиль',
                    'edit' => 'Редактировать',
                ],

                'edit-success' => 'Профиль успешно обновлен.',
                'edit-fail' => 'Ошибка! Профиль не может быть обновлен, повторите попытку позже. ',
                'unmatch' => 'Старый пароль не совпадает.',

                'fname' => 'Имя',
                'lname' => 'Фамилия',
                'gender' => 'Пол',
                'other' => 'Другое',
                'male' => 'Мужской',
                'female' => 'Женский',
                'dob' => 'Дата рождения',
                'phone' => 'Телефон',
                'email' => 'Email',
                'opassword' => 'Старый пароль',
                'password' => 'Пароль',
                'cpassword' => 'Подтвердить пароль',
                'submit' => 'Обновить профиль',

                'edit-profile' => [
                    'title' => 'Редактировать профиль',
                    'page-title' => 'Редактировать форму профиля'
                ]
            ],

            'address' => [
                'index' => [
                    'page-title' => 'Адрес',
                    'title' => 'Адрес',
                    'add' => 'Добавить адрес',
                    'edit' => 'Редактировать',
                    'empty' => 'У вас нет сохраненных адресов здесь, попробуйте создать его, нажав на ссылку ниже',
                    'create' => 'Создать адрес',
                    'delete' => 'Удалить',
                    'make-default' => 'Сделать по умолчанию',
                    'default' => 'По умолчанию',
                    'contact' => 'Контакт',
                    'verify-delete' => 'Вы действительно хотите удалить этот адрес?',
                    'default-delete' => 'Адрес по умолчанию изменить нельзя.',
                    'enter-password' => 'Введите свой пароль.',
                ],

                'create' => [
                    'page-title' => 'Добавить адресную форму',
                    'company_name' => 'Название компании',
                    'first_name' => 'Имя',
                    'last_name' => 'Фамилия',
                    'vat_id' => 'ID Налогоплательщика',
                    'vat_help_note' => '[Примечание: используйте код страны с идентификатором НДС. Например. INV01234567891]',
                    'title' => 'Добавить адрес',
                    'street-address' => 'Улица, дом',
                    'country' => 'Страна',
                    'state' => 'Область',
                    'select-state' => 'Выбрать область, штат или провинцию',
                    'city' => 'Город',
                    'postcode' => 'Почтовый индекс',
                    'phone' => 'Телефон',
                    'submit' => 'Сохранить адрес',
                    'success' => 'Адрес был успешно добавлен.',
                    'error' => 'Адрес не может быть добавлен.'
                ],

                'edit' => [
                    'page-title' => 'Редактировать адрес',
                    'company_name' => 'Название компании',
                    'first_name' => 'Имя',
                    'last_name' => 'Фамилия',
                    'vat_id' => 'ID Налогоплательщика',
                    'title' => 'Редактировать адрес',
                    'street-address' => 'Улица, дом',
                    'submit' => 'Сохранить адрес',
                    'success' => 'Адрес успешно обновлен.',
                ],
                'delete' => [
                    'success' => 'Адрес успешно удален',
                    'fail' => 'Адрес не может быть удален',
                    'wrong-password' => 'Неправильный пароль!'
                ]
            ],

            'order' => [
                'index' => [
                    'page-title' => 'Заказы',
                    'title' => 'Заказы',
                    'order_id' => 'Код заказа',
                    'date' => 'Дата',
                    'status' => 'Статус',
                    'total' => 'Итого',
                    'order_number' => 'Номер заказа'
                ],

                'view' => [
                    'page-tile' => 'Заказ #:order_id',
                    'info' => 'Информация',
                    'place-on' => 'Размещены на',
                    'products-orders' => 'Заказанные продукты',
                    'invoices' => 'Счета',
                    'shipments' => 'Отправки',
                    'SKU' => 'Bar-код',
                    'product-name' => 'Наименование',
                    'qty' => 'Кол-во',
                    'item-status' => 'Статус товара',
                    'item-order' => 'Заказано (:qty_ordered)',
                    'item-invoice' => 'Выставлено в счет (:qty_invoiced)',
                    'item-shipped' => 'Отправлено (:qty_shipped)',
                    'item-cancelled' => 'Отменено (:qty_canceled)',
                    'item-refunded' => 'Возмещено (:qty_refunded)',
                    'price' => 'Цена',
                    'total' => 'Итог',
                    'subtotal' => 'промежуточный итог',
                    'shipping-Handling' => 'Доставка и обработка',
                    'tax' => 'Налог',
                    'discount' => 'Скидка',
                    'tax-процент' => 'Налоговый процент',
                    'tax-amount' => 'Сумма налога',
                    'discount-amount' => 'Сумма скидки',
                    'grand-total' => 'Общий итог',
                    'total-paid' => 'Всего оплачено',
                    'total-refunded' => 'Всего возмещено',
                    'total-due' => 'Итого к оплате',
                    'shipping-address' => 'Адрес доставки',
                    'billing-address' => 'Адрес плательщика',
                    'shipping-method' => 'Способ доставки',
                    'payment-method' => 'Способ оплаты',
                    'Individual-invoice' => 'Счет #:invoice_id',
                    'Individual-Shipment' => 'Отгрузка №:shipment_id',
                    'print' => 'Распечатать',
                    'invoice-id' => 'ID счета',
                    'order-id' => 'ID заказа',
                    'order-date' => 'Дата заказа',
                    'bill-to' => 'Плательщик',
                    'ship-to' => 'Получатель',
                    'contact' => 'Контакт',
                    'refunds' => 'Возмещения',
                    'Individual-refund' => 'Refund #:refund_id',
                    'setting-refund' => 'Корректировка возмещений',
                    'adjustment-fee' => 'Комиссия за корректировку',
                ]
            ],

            'wishlist' => [
                'page-title' => 'Wishlist',
                'title' => 'Wishlist',
                'deleteall' => 'Delete All',
                'moveall' => 'Move All Products To Cart',
                'move-to-cart' => 'Move To Cart',
                'error' => 'Cannot add product to wishlist due to unknown problems, please checkback later',
                'add' => 'Item successfully added to wishlist',
                'remove' => 'Item successfully removed from wishlist',
                'moved' => 'Item successfully moved To cart',
                'option-missing' => 'Product options are missing, so item can not be moved to the wishlist.',
                'move-error' => 'Item cannot be moved to wishlist, Please try again later',
                'success' => 'Item successfully added to wishlist',
                'failure' => 'Item cannot be added to wishlist, Please try again later',
                'already' => 'Item already present in your wishlist',
                'removed' => 'Item successfully removed from wishlist',
                'remove-fail' => 'Item cannot Be removed from wishlist, Please try again later',
                'empty' => 'You do not have any items in your wishlist',
                'remove-all-success' => 'All the items from your wishlist have been removed',
            ],

            'downloadable_products' => [
                'title' => 'Downloadable Products',
                'order-id' => 'Order Id',
                'date' => 'Date',
                'name' => 'Title',
                'status' => 'Status',
                'pending' => 'Pending',
                'available' => 'Available',
                'expired' => 'Expired',
                'remaining-downloads' => 'Remaining Downloads',
                'unlimited' => 'Unlimited',
                'download-error' => 'Download link has been expired.'
            ],

            'review' => [
                'index' => [
                    'title' => 'Reviews',
                    'page-title' => 'Reviews'
                ],

                'view' => [
                    'page-tile' => 'Review #:id',
                ]
            ]
        ]
    ],

    'products' => [
        'layered-nav-title' => 'Shop By',
        'price-label' => 'As low as',
        'remove-filter-link-title' => 'Clear All',
        'sort-by' => 'Sort By',
        'from-a-z' => 'From A-Z',
        'from-z-a' => 'From Z-A',
        'newest-first' => 'Newest First',
        'oldest-first' => 'Oldest First',
        'cheapest-first' => 'Cheapest First',
        'expensive-first' => 'Expensive First',
        'show' => 'Show',
        'pager-info' => 'Showing :showing of :total Items',
        'description' => 'Description',
        'specification' => 'Specification',
        'total-reviews' => ':total Reviews',
        'total-rating' => ':total_rating Ratings & :total_reviews Reviews',
        'by' => 'By :name',
        'up-sell-title' => 'We found other products you might like!',
        'related-product-title' => 'Related Products',
        'cross-sell-title' => 'More choices',
        'reviews-title' => 'Ratings & Reviews',
        'write-review-btn' => 'Write Review',
        'choose-option' => 'Choose an option',
        'sale' => 'Sale',
        'new' => 'New',
        'empty' => 'No products available in this category',
        'add-to-cart' => 'Add To Cart',
        'buy-now' => 'Buy Now',
        'whoops' => 'Whoops!',
        'quantity' => 'Quantity',
        'in-stock' => 'In Stock',
        'out-of-stock' => 'Out Of Stock',
        'view-all' => 'View All',
        'select-above-options' => 'Please select above options first.',
        'less-quantity' => 'Quantity can not be less than one.',
        'samples' => 'Samples',
        'links' => 'Links',
        'sample' => 'Sample',
        'name' => 'Name',
        'qty' => 'Qty',
        'starting-at' => 'Starting at',
        'customize-options' => 'Customize Options',
        'choose-selection' => 'Choose a selection',
        'your-customization' => 'Your Customization',
        'total-amount' => 'Total Amount',
        'none' => 'None'
    ],

    // 'reviews' => [
    //     'empty' => 'You Have Not Reviewed Any Of Product Yet'
    // ]

    'buynow' => [
        'no-options' => 'Please select options before buying this product.'
    ],

    'checkout' => [
        'cart' => [
            'integrity' => [
                'missing_fields' => 'Some required fields missing for this product.',
                'missing_options' => 'Options are missing for this product.',
                'missing_links' => 'Downloadable links are missing for this product.',
                'qty_missing' => 'Atleast one product should have more than 1 quantity.',
                'qty_impossible' => 'Cannot add more than one of these products to cart.'
            ],
            'create-error' => 'Encountered some issue while making cart instance.',
            'title' => 'Shopping Cart',
            'empty' => 'Your shopping cart is empty',
            'update-cart' => 'Update Cart',
            'continue-shopping' => 'Continue Shopping',
            'proceed-to-checkout' => 'Proceed To Checkout',
            'remove' => 'Remove',
            'remove-link' => 'Remove',
            'move-to-wishlist' => 'Move to Wishlist',
            'move-to-wishlist-success' => 'Item moved to wishlist successfully.',
            'move-to-wishlist-error' => 'Cannot move item to wishlist, please try again later.',
            'add-config-warning' => 'Please select option before adding to cart.',
            'quantity' => [
                'quantity' => 'Quantity',
                'success' => 'Cart Item(s) successfully updated.',
                'illegal' => 'Quantity cannot be lesser than one.',
                'inventory_warning' => 'The requested quantity is not available, please try again later.',
                'error' => 'Cannot update the item(s) at the moment, please try again later.'
            ],

            'item' => [
                'error_remove' => 'No items to remove from the cart.',
                'success' => 'Item was successfully added to cart.',
                'success-remove' => 'Item was removed successfully from the cart.',
                'error-add' => 'Item cannot be added to cart, please try again later.',
            ],
            'quantity-error' => 'Requested quantity is not available.',
            'cart-subtotal' => 'Cart Subtotal',
            'cart-remove-action' => 'Do you really want to do this ?',
            'partial-cart-update' => 'Only some of the product(s) were updated',
            'link-missing' => ''
        ],

        'onepage' => [
            'title' => 'Checkout',
            'information' => 'Information',
            'shipping' => 'Shipping',
            'payment' => 'Payment',
            'complete' => 'Complete',
            'billing-address' => 'Billing Address',
            'sign-in' => 'Sign In',
            'company-name' => 'Company Name',
            'first-name' => 'First Name',
            'last-name' => 'Last Name',
            'email' => 'Email',
            'address1' => 'Street Address',
            'city' => 'City',
            'state' => 'State',
            'select-state' => 'Select a region, state or province',
            'postcode' => 'Zip/Postcode',
            'phone' => 'Telephone',
            'country' => 'Country',
            'order-summary' => 'Order Summary',
            'shipping-address' => 'Shipping Address',
            'use_for_shipping' => 'Ship to this address',
            'continue' => 'Continue',
            'shipping-method' => 'Select Shipping Method',
            'payment-methods' => 'Select Payment Method',
            'payment-method' => 'Payment Method',
            'summary' => 'Order Summary',
            'price' => 'Price',
            'quantity' => 'Quantity',
            'billing-address' => 'Billing Address',
            'shipping-address' => 'Shipping Address',
            'contact' => 'Contact',
            'place-order' => 'Place Order',
            'new-address' => 'Add New Address',
            'save_as_address' => 'Save this address',
            'apply-coupon' => 'Apply Coupon',
            'amt-payable' => 'Amount Payable',
            'got' => 'Got',
            'free' => 'Free',
            'coupon-used' => 'Coupon Used',
            'applied' => 'Applied',
            'back' => 'Back',
            'cash-desc' => 'Cash On Delivery',
            'money-desc' => 'Money Transfer',
            'paypal-desc' => 'Paypal Standard',
            'free-desc' => 'This is a free shipping',
            'flat-desc' => 'This is a flat rate',
            'password' => 'Password',
            'login-exist-message' => 'You already have an account with us, Sign in or continue as guest.',
            'enter-coupon-code' => 'Enter Coupon Code'
        ],

        'total' => [
            'order-summary' => 'Order Summary',
            'sub-total' => 'Items',
            'grand-total' => 'Grand Total',
            'delivery-charges' => 'Delivery Charges',
            'tax' => 'Tax',
            'discount' => 'Discount',
            'price' => 'price',
            'disc-amount' => 'Amount discounted',
            'new-grand-total' => 'New Grand Total',
            'coupon' => 'Coupon',
            'coupon-applied' => 'Applied Coupon',
            'remove-coupon' => 'Remove Coupon',
            'cannot-apply-coupon' => 'Cannot Apply Coupon',
            'invalid-coupon' => 'Coupon code is invalid.',
            'success-coupon' => 'Coupon code applied successfully.',
            'coupon-apply-issue' => 'Coupon code can\'t be applied.'
        ],

        'success' => [
            'title' => 'Order successfully placed',
            'thanks' => 'Thank you for your order!',
            'order-id-info' => 'Your order id is #:order_id',
            'info' => 'We will email you, your order details and tracking information'
        ]
    ],

    'mail' => [
        'order' => [
            'subject' => 'New Order Confirmation',
            'heading' => 'Order Confirmation!',
            'dear' => 'Dear :customer_name',
            'dear-admin' => 'Dear :admin_name',
            'greeting' => 'Thanks for your Order :order_id placed on :created_at',
            'greeting-admin' => 'Order Id :order_id placed on :created_at',
            'summary' => 'Summary of Order',
            'shipping-address' => 'Shipping Address',
            'billing-address' => 'Billing Address',
            'contact' => 'Contact',
            'shipping' => 'Shipping Method',
            'payment' => 'Payment Method',
            'price' => 'Price',
            'quantity' => 'Quantity',
            'subtotal' => 'Subtotal',
            'shipping-handling' => 'Shipping & Handling',
            'tax' => 'Tax',
            'discount' => 'Discount',
            'grand-total' => 'Grand Total',
            'final-summary' => 'Thanks for showing your interest in our store we will send you tracking number once it shipped',
            'help' => 'If you need any kind of help please contact us at :support_email',
            'thanks' => 'Thanks!',
            'cancel' => [
                'subject' => 'Order Cancel Confirmation',
                'heading' => 'Order Cancelled',
                'dear' => 'Dear :customer_name',
                'greeting' => 'You Order with order id #:order_id placed on :created_at has been cancelled',
                'summary' => 'Summary of Order',
                'shipping-address' => 'Shipping Address',
                'billing-address' => 'Billing Address',
                'contact' => 'Contact',
                'shipping' => 'Shipping Method',
                'payment' => 'Payment Method',
                'subtotal' => 'Subtotal',
                'shipping-handling' => 'Shipping & Handling',
                'tax' => 'Tax',
                'discount' => 'Discount',
                'grand-total' => 'Grand Total',
                'final-summary' => 'Thanks for showing your interest in our store',
                'help' => 'If you need any kind of help please contact us at :support_email',
                'thanks' => 'Thanks!',
            ]
        ],

        'invoice' => [
            'heading' => 'Your invoice #:invoice_id for Order #:order_id',
            'subject' => 'Invoice for your order #:order_id',
            'summary' => 'Summary of Invoice',
        ],

        'shipment' => [
            'heading' => 'Shipment #:shipment_id  has been generated for Order #:order_id',
            'inventory-heading' => 'New shipment #:shipment_id had been generated for Order #:order_id',
            'subject' => 'Shipment for your order #:order_id',
            'inventory-subject' => 'New shipment had been generated for Order #:order_id',
            'summary' => 'Summary of Shipment',
            'carrier' => 'Carrier',
            'tracking-number' => 'Tracking Number',
            'greeting' => 'An order :order_id has been placed on :created_at',
        ],

        'refund' => [
            'heading' => 'Your Refund #:refund_id for Order #:order_id',
            'subject' => 'Refund for your order #:order_id',
            'summary' => 'Summary of Refund',
            'adjustment-refund' => 'Adjustment Refund',
            'adjustment-fee' => 'Adjustment Fee'
        ],

        'forget-password' => [
            'subject' => 'Customer Reset Password',
            'dear' => 'Dear :name',
            'info' => 'You are receiving this email because we received a password reset request for your account',
            'reset-password' => 'Reset Password',
            'final-summary' => 'If you did not request a password reset, no further action is required',
            'thanks' => 'Thanks!'
        ],

        'customer' => [
            'new' => [
                'dear' => 'Dear :customer_name',
                'username-email' => 'UserName/Email',
                'subject' => 'New Customer Registration',
                'password' => 'Password',
                'summary' => 'Your account has been created.
                Your account details are below: ',
                'thanks' => 'Thanks!',
            ],

            'registration' => [
                'subject' => 'New Customer Registration',
                'customer-registration' => 'Customer Registered Successfully',
                'dear' => 'Dear :customer_name',
                'greeting' => 'Welcome and thank you for registering with us!',
                'summary' => 'Your account has now been created successfully and you can login using your email address and password credentials. Upon logging in, you will be able to access other services including reviewing past orders, wishlists and editing your account information.',
                'thanks' => 'Thanks!',
            ],

            'verification' => [
                'heading' => config('app.name') . ' - Email Verification',
                'subject' => 'Verification Mail',
                'verify' => 'Verify Your Account',
                'summary' => 'This is the mail to verify that the email address you entered is yours.
                Kindly click the Verify Your Account button below to verify your account.'
            ],

            'subscription' => [
                'subject' => 'Subscription Email',
                'greeting' => ' Welcome to ' . config('app.name') . ' - Email Subscription',
                'unsubscribe' => 'Unsubscribe',
                'summary' => 'Thanks for putting me into your inbox. It’s been a while since you’ve read ' . config('app.name') . ' email, and we don’t want to overwhelm your inbox. If you still do not want to receive
                the latest email marketing news then for sure click the button below.'
            ]
        ]
    ],

    'webkul' => [
        'copy-right' => '© Copyright :year Webkul Software, All rights reserved',
    ],

    'response' => [
        'create-success' => ':name created successfully.',
        'update-success' => ':name updated successfully.',
        'delete-success' => ':name deleted successfully.',
        'submit-success' => ':name submitted successfully.'
    ],
];
