<?php

return [
    'userManagement'    => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission'        => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role'              => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user'              => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => ' ',
            'name'                      => 'Name',
            'name_helper'               => ' ',
            'email'                     => 'Email',
            'email_helper'              => ' ',
            'email_verified_at'         => 'Email verified at',
            'email_verified_at_helper'  => ' ',
            'password'                  => 'Password',
            'password_helper'           => ' ',
            'roles'                     => 'Roles',
            'roles_helper'              => ' ',
            'remember_token'            => 'Remember Token',
            'remember_token_helper'     => ' ',
            'created_at'                => 'Created at',
            'created_at_helper'         => ' ',
            'updated_at'                => 'Updated at',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'Deleted at',
            'deleted_at_helper'         => ' ',
            'verified'                  => 'Verified',
            'verified_helper'           => ' ',
            'verified_at'               => 'Verified at',
            'verified_at_helper'        => ' ',
            'verification_token'        => 'Verification token',
            'verification_token_helper' => ' ',
            'published'                 => 'Published',
            'published_helper'          => ' ',
            'is_active'                 => 'Is Active',
            'is_active_helper'          => ' ',
            'slug'                      => 'Slug',
            'slug_helper'               => ' ',
        ],
    ],
    'productManagement' => [
        'title'          => 'Product Management',
        'title_singular' => 'Product Management',
    ],
    'productCategory'   => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'photo'              => 'Photo',
            'photo_helper'       => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'productTag'        => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'product'           => [
        'title'          => 'Products',
        'title_singular' => 'Product',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'description'              => 'Description',
            'description_helper'       => ' ',
            'price'                    => 'Price',
            'price_helper'             => ' ',
            'category'                 => 'Categories',
            'category_helper'          => ' ',
            'tag'                      => 'Tags',
            'tag_helper'               => ' ',
            'photo'                    => 'Photo',
            'photo_helper'             => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated At',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted At',
            'deleted_at_helper'        => ' ',
            'short_description'        => 'Short Description',
            'short_description_helper' => 'This is also used as excerpt',
            'additional_images'        => 'Additional Images',
            'additional_images_helper' => ' ',
            'attachments'              => 'Attachments',
            'attachments_helper'       => ' ',
            'meta_title'               => 'Meta Title',
            'meta_title_helper'        => 'Do not use more them 90 characters here.',
            'meta_desc'                => 'Meta Description',
            'meta_desc_helper'         => 'Keep this under 110 characters if you can',
            'fb_title'                 => 'Facebook Title',
            'fb_title_helper'          => 'This will only show on facebook',
            'twitter_title'            => 'Twitter Title',
            'twitter_title_helper'     => 'This will only show on twitter pages.',
            'product_type'             => 'Product Type',
            'product_type_helper'      => ' ',
            'published'                => 'Published',
            'published_helper'         => ' ',
            'slug'                     => 'Slug',
            'slug_helper'              => ' ',
        ],
    ],
    'userAlert'         => [
        'title'          => 'User Alerts',
        'title_singular' => 'User Alert',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'alert_text'        => 'Alert Text',
            'alert_text_helper' => ' ',
            'alert_link'        => 'Alert Link',
            'alert_link_helper' => ' ',
            'user'              => 'Users',
            'user_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
        ],
    ],
    'faqManagement'     => [
        'title'          => 'FAQ Management',
        'title_singular' => 'FAQ Management',
    ],
    'faqCategory'       => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'category'          => 'Category',
            'category_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'faqQuestion'       => [
        'title'          => 'Questions',
        'title_singular' => 'Question',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'category'           => 'Category',
            'category_helper'    => ' ',
            'question'           => 'Question',
            'question_helper'    => ' ',
            'answer'             => 'Answer',
            'answer_helper'      => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => ' ',
            'published'          => 'Published',
            'published_helper'   => ' ',
            'slug'               => 'Slug',
            'slug_helper'        => ' ',
            'attachments'        => 'Attachments',
            'attachments_helper' => ' ',
            'photo'              => 'Photo',
            'photo_helper'       => ' ',
        ],
    ],
    'contentManagement' => [
        'title'          => 'Content management',
        'title_singular' => 'Content management',
    ],
    'contentCategory'   => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'contentTag'        => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'contentPage'       => [
        'title'          => 'Pages',
        'title_singular' => 'Page',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'title'                 => 'Title',
            'title_helper'          => ' ',
            'category'              => 'Categories',
            'category_helper'       => ' ',
            'tag'                   => 'Tags',
            'tag_helper'            => ' ',
            'page_text'             => 'Full Text',
            'page_text_helper'      => ' ',
            'excerpt'               => 'Excerpt',
            'excerpt_helper'        => ' ',
            'featured_image'        => 'Featured Image',
            'featured_image_helper' => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated At',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted At',
            'deleted_at_helper'     => ' ',
            'slug'                  => 'Slug',
            'slug_helper'           => ' ',
        ],
    ],
    'post'              => [
        'title'          => 'Posts',
        'title_singular' => 'Post',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'title'                 => 'Title',
            'title_helper'          => ' ',
            'category'              => 'Categories',
            'category_helper'       => ' ',
            'tag'                   => 'Tags',
            'tag_helper'            => ' ',
            'post_text'             => 'Post Text',
            'post_text_helper'      => ' ',
            'excerpt'               => 'Excerpt',
            'excerpt_helper'        => ' ',
            'featured_image'        => 'Featured Image',
            'featured_image_helper' => ' ',
            'attachments'           => 'Attachments',
            'attachments_helper'    => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated At',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted At',
            'deleted_at_helper'     => ' ',
            'products'              => 'Products',
            'products_helper'       => ' ',
            'faqs'                  => 'Faqs',
            'faqs_helper'           => ' ',
            'meta_title'            => 'Meta Title',
            'meta_title_helper'     => ' ',
            'meta_desc'             => 'Meta Description',
            'meta_desc_helper'      => ' ',
            'fb_title'              => 'Facebook Title',
            'fb_title_helper'       => 'Only shows when shared on Facebook',
            'twitter_title'         => 'Twitter Title',
            'twitter_title_helper'  => 'Only shows when shared on Twitter',
            'published'             => 'Published',
            'published_helper'      => ' ',
            'slug'                  => 'Slug',
            'slug_helper'           => ' ',
        ],
    ],
    'ecommerce'         => [
        'title'          => 'Ecommerce',
        'title_singular' => 'Ecommerce',
    ],
    'partner'           => [
        'title'          => 'Partners',
        'title_singular' => 'Partner',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'published'                => 'Published',
            'published_helper'         => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'description'              => 'Description',
            'description_helper'       => ' ',
            'logo'                     => 'Logo',
            'logo_helper'              => ' ',
            'order'                    => 'Order',
            'order_helper'             => ' ',
            'url'                      => 'URL',
            'url_helper'               => ' ',
            'attachments'              => 'Attachments',
            'attachments_helper'       => ' ',
            'additional_images'        => 'Additional Images',
            'additional_images_helper' => ' ',
            'products'                 => 'Products',
            'products_helper'          => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
            'slug'                     => 'Slug',
            'slug_helper'              => ' ',
        ],
    ],
    'productType'       => [
        'title'          => 'Product Types',
        'title_singular' => 'Product Type',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'productReview'     => [
        'title'          => 'Product Reviews',
        'title_singular' => 'Product Review',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'published'                => 'Published',
            'published_helper'         => ' ',
            'title'                    => 'Title',
            'title_helper'             => ' ',
            'rating'                   => 'Rating',
            'rating_helper'            => ' ',
            'product'                  => 'Product',
            'product_helper'           => ' ',
            'body'                     => 'Body',
            'body_helper'              => ' ',
            'website'                  => 'Website URL',
            'website_helper'           => ' ',
            'signiture'                => 'Signiture',
            'signiture_helper'         => ' ',
            'signiture_company'        => 'Signiture Company',
            'signiture_company_helper' => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'discussion'        => [
        'title'          => 'Discussions',
        'title_singular' => 'Discussion',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'title'               => 'Title',
            'title_helper'        => ' ',
            'content_area'        => 'Content Area',
            'content_area_helper' => ' ',
            'header_image'        => 'Header Image',
            'header_image_helper' => 'please make header image 1200 x 500 if no image default will be used',
            'attachments'         => 'Attachments',
            'attachments_helper'  => 'Attachments viewable only by logged in users',
            'slug'                => 'Slug',
            'slug_helper'         => ' ',
            'user'                => 'User',
            'user_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
        ],
    ],
    'event'             => [
        'title'          => 'Events',
        'title_singular' => 'Event',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'published'              => 'Published',
            'published_helper'       => ' ',
            'title'                  => 'Title',
            'title_helper'           => ' ',
            'content_area'           => 'Content Area',
            'content_area_helper'    => ' ',
            'event_date_time'        => 'Event Date & Time',
            'event_date_time_helper' => ' ',
            'photo'                  => 'Photo',
            'photo_helper'           => 'Image for event header section. 1200 x 500',
            'attachments'            => 'Attachments',
            'attachments_helper'     => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
        ],
    ],
    'location'          => [
        'title'          => 'Locations',
        'title_singular' => 'Location',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'type'              => 'Type',
            'type_helper'       => ' ',
            'user'              => 'User',
            'user_helper'       => ' ',
            'nickname'          => 'Nickname',
            'nickname_helper'   => ' ',
            'address'           => 'Address',
            'address_helper'    => ' ',
            'address_2'         => 'Address 2',
            'address_2_helper'  => ' ',
            'city'              => 'City',
            'city_helper'       => ' ',
            'state'             => 'State',
            'state_helper'      => ' ',
            'zip'               => 'Zip',
            'zip_helper'        => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'profile'           => [
        'title'          => 'Profiles',
        'title_singular' => 'Profile',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'first_name'              => 'First Name',
            'first_name_helper'       => ' ',
            'last_name'               => 'Last Name',
            'last_name_helper'        => ' ',
            'about'                   => 'About',
            'about_helper'            => ' ',
            'website'                 => 'Website',
            'website_helper'          => ' ',
            'linkedin'                => 'Linkedin',
            'linkedin_helper'         => ' ',
            'facebook'                => 'Facebook',
            'facebook_helper'         => ' ',
            'twitter'                 => 'Twitter',
            'twitter_helper'          => ' ',
            'home_phone'              => 'Home Phone',
            'home_phone_helper'       => ' ',
            'mobile_number'           => 'Mobile Number',
            'mobile_number_helper'    => ' ',
            'additional_email'        => 'Additional Email',
            'additional_email_helper' => ' ',
            'user'                    => 'User',
            'user_helper'             => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => ' ',
        ],
    ],
];