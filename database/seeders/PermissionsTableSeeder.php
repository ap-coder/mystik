<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 18,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 19,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 20,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 21,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 22,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 23,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 24,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 25,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 26,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 27,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 28,
                'title' => 'product_create',
            ],
            [
                'id'    => 29,
                'title' => 'product_edit',
            ],
            [
                'id'    => 30,
                'title' => 'product_show',
            ],
            [
                'id'    => 31,
                'title' => 'product_delete',
            ],
            [
                'id'    => 32,
                'title' => 'product_access',
            ],
            [
                'id'    => 33,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 34,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 35,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 36,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 37,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 38,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 39,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 40,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 41,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 42,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 43,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 44,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 45,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 46,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 47,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 48,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 49,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 50,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 51,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 52,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 53,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 54,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 55,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 56,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 57,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 58,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 59,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 60,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 61,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 62,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 63,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 64,
                'title' => 'post_create',
            ],
            [
                'id'    => 65,
                'title' => 'post_edit',
            ],
            [
                'id'    => 66,
                'title' => 'post_show',
            ],
            [
                'id'    => 67,
                'title' => 'post_delete',
            ],
            [
                'id'    => 68,
                'title' => 'post_access',
            ],
            [
                'id'    => 69,
                'title' => 'ecommerce_access',
            ],
            [
                'id'    => 70,
                'title' => 'partner_create',
            ],
            [
                'id'    => 71,
                'title' => 'partner_edit',
            ],
            [
                'id'    => 72,
                'title' => 'partner_show',
            ],
            [
                'id'    => 73,
                'title' => 'partner_delete',
            ],
            [
                'id'    => 74,
                'title' => 'partner_access',
            ],
            [
                'id'    => 75,
                'title' => 'product_type_create',
            ],
            [
                'id'    => 76,
                'title' => 'product_type_edit',
            ],
            [
                'id'    => 77,
                'title' => 'product_type_show',
            ],
            [
                'id'    => 78,
                'title' => 'product_type_delete',
            ],
            [
                'id'    => 79,
                'title' => 'product_type_access',
            ],
            [
                'id'    => 80,
                'title' => 'product_review_create',
            ],
            [
                'id'    => 81,
                'title' => 'product_review_edit',
            ],
            [
                'id'    => 82,
                'title' => 'product_review_show',
            ],
            [
                'id'    => 83,
                'title' => 'product_review_delete',
            ],
            [
                'id'    => 84,
                'title' => 'product_review_access',
            ],
            [
                'id'    => 85,
                'title' => 'discussion_create',
            ],
            [
                'id'    => 86,
                'title' => 'discussion_edit',
            ],
            [
                'id'    => 87,
                'title' => 'discussion_show',
            ],
            [
                'id'    => 88,
                'title' => 'discussion_delete',
            ],
            [
                'id'    => 89,
                'title' => 'discussion_access',
            ],
            [
                'id'    => 90,
                'title' => 'event_create',
            ],
            [
                'id'    => 91,
                'title' => 'event_edit',
            ],
            [
                'id'    => 92,
                'title' => 'event_show',
            ],
            [
                'id'    => 93,
                'title' => 'event_delete',
            ],
            [
                'id'    => 94,
                'title' => 'event_access',
            ],
            [
                'id'    => 95,
                'title' => 'location_create',
            ],
            [
                'id'    => 96,
                'title' => 'location_edit',
            ],
            [
                'id'    => 97,
                'title' => 'location_show',
            ],
            [
                'id'    => 98,
                'title' => 'location_delete',
            ],
            [
                'id'    => 99,
                'title' => 'location_access',
            ],
            [
                'id'    => 100,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
