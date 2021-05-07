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
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 18,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 19,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 20,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 21,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 22,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 23,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 24,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 25,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 26,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 27,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 28,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 29,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 30,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 31,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 32,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 33,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 34,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 35,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 36,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 37,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 38,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 39,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 40,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 41,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 42,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 43,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 44,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 45,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 46,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 47,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 48,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 49,
                'title' => 'task_create',
            ],
            [
                'id'    => 50,
                'title' => 'task_edit',
            ],
            [
                'id'    => 51,
                'title' => 'task_show',
            ],
            [
                'id'    => 52,
                'title' => 'task_delete',
            ],
            [
                'id'    => 53,
                'title' => 'task_access',
            ],
            [
                'id'    => 54,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 55,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 56,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 57,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 58,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 59,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 60,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 61,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 62,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 63,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 64,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 65,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 66,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 67,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 68,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 69,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 70,
                'title' => 'time_management_access',
            ],
            [
                'id'    => 71,
                'title' => 'time_work_type_create',
            ],
            [
                'id'    => 72,
                'title' => 'time_work_type_edit',
            ],
            [
                'id'    => 73,
                'title' => 'time_work_type_show',
            ],
            [
                'id'    => 74,
                'title' => 'time_work_type_delete',
            ],
            [
                'id'    => 75,
                'title' => 'time_work_type_access',
            ],
            [
                'id'    => 76,
                'title' => 'time_project_create',
            ],
            [
                'id'    => 77,
                'title' => 'time_project_edit',
            ],
            [
                'id'    => 78,
                'title' => 'time_project_show',
            ],
            [
                'id'    => 79,
                'title' => 'time_project_delete',
            ],
            [
                'id'    => 80,
                'title' => 'time_project_access',
            ],
            [
                'id'    => 81,
                'title' => 'time_entry_create',
            ],
            [
                'id'    => 82,
                'title' => 'time_entry_edit',
            ],
            [
                'id'    => 83,
                'title' => 'time_entry_show',
            ],
            [
                'id'    => 84,
                'title' => 'time_entry_delete',
            ],
            [
                'id'    => 85,
                'title' => 'time_entry_access',
            ],
            [
                'id'    => 86,
                'title' => 'time_report_create',
            ],
            [
                'id'    => 87,
                'title' => 'time_report_edit',
            ],
            [
                'id'    => 88,
                'title' => 'time_report_show',
            ],
            [
                'id'    => 89,
                'title' => 'time_report_delete',
            ],
            [
                'id'    => 90,
                'title' => 'time_report_access',
            ],
            [
                'id'    => 91,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 92,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 93,
                'title' => 'expense_management_access',
            ],
            [
                'id'    => 94,
                'title' => 'expense_category_create',
            ],
            [
                'id'    => 95,
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => 96,
                'title' => 'expense_category_show',
            ],
            [
                'id'    => 97,
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => 98,
                'title' => 'expense_category_access',
            ],
            [
                'id'    => 99,
                'title' => 'income_category_create',
            ],
            [
                'id'    => 100,
                'title' => 'income_category_edit',
            ],
            [
                'id'    => 101,
                'title' => 'income_category_show',
            ],
            [
                'id'    => 102,
                'title' => 'income_category_delete',
            ],
            [
                'id'    => 103,
                'title' => 'income_category_access',
            ],
            [
                'id'    => 104,
                'title' => 'expense_create',
            ],
            [
                'id'    => 105,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 106,
                'title' => 'expense_show',
            ],
            [
                'id'    => 107,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 108,
                'title' => 'expense_access',
            ],
            [
                'id'    => 109,
                'title' => 'income_create',
            ],
            [
                'id'    => 110,
                'title' => 'income_edit',
            ],
            [
                'id'    => 111,
                'title' => 'income_show',
            ],
            [
                'id'    => 112,
                'title' => 'income_delete',
            ],
            [
                'id'    => 113,
                'title' => 'income_access',
            ],
            [
                'id'    => 114,
                'title' => 'expense_report_create',
            ],
            [
                'id'    => 115,
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => 116,
                'title' => 'expense_report_show',
            ],
            [
                'id'    => 117,
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => 118,
                'title' => 'expense_report_access',
            ],
            [
                'id'    => 119,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 120,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 121,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 122,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 123,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 124,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 125,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 126,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 127,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 128,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 129,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 130,
                'title' => 'product_create',
            ],
            [
                'id'    => 131,
                'title' => 'product_edit',
            ],
            [
                'id'    => 132,
                'title' => 'product_show',
            ],
            [
                'id'    => 133,
                'title' => 'product_delete',
            ],
            [
                'id'    => 134,
                'title' => 'product_access',
            ],
            [
                'id'    => 135,
                'title' => 'asset_management_access',
            ],
            [
                'id'    => 136,
                'title' => 'asset_category_create',
            ],
            [
                'id'    => 137,
                'title' => 'asset_category_edit',
            ],
            [
                'id'    => 138,
                'title' => 'asset_category_show',
            ],
            [
                'id'    => 139,
                'title' => 'asset_category_delete',
            ],
            [
                'id'    => 140,
                'title' => 'asset_category_access',
            ],
            [
                'id'    => 141,
                'title' => 'asset_location_create',
            ],
            [
                'id'    => 142,
                'title' => 'asset_location_edit',
            ],
            [
                'id'    => 143,
                'title' => 'asset_location_show',
            ],
            [
                'id'    => 144,
                'title' => 'asset_location_delete',
            ],
            [
                'id'    => 145,
                'title' => 'asset_location_access',
            ],
            [
                'id'    => 146,
                'title' => 'asset_status_create',
            ],
            [
                'id'    => 147,
                'title' => 'asset_status_edit',
            ],
            [
                'id'    => 148,
                'title' => 'asset_status_show',
            ],
            [
                'id'    => 149,
                'title' => 'asset_status_delete',
            ],
            [
                'id'    => 150,
                'title' => 'asset_status_access',
            ],
            [
                'id'    => 151,
                'title' => 'asset_create',
            ],
            [
                'id'    => 152,
                'title' => 'asset_edit',
            ],
            [
                'id'    => 153,
                'title' => 'asset_show',
            ],
            [
                'id'    => 154,
                'title' => 'asset_delete',
            ],
            [
                'id'    => 155,
                'title' => 'asset_access',
            ],
            [
                'id'    => 156,
                'title' => 'assets_history_access',
            ],
            [
                'id'    => 157,
                'title' => 'team_create',
            ],
            [
                'id'    => 158,
                'title' => 'team_edit',
            ],
            [
                'id'    => 159,
                'title' => 'team_show',
            ],
            [
                'id'    => 160,
                'title' => 'team_delete',
            ],
            [
                'id'    => 161,
                'title' => 'team_access',
            ],
            [
                'id'    => 162,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 163,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 164,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 165,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 166,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 167,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 168,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 169,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 170,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 171,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 172,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 173,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 174,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 175,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 176,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 177,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 178,
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => 179,
                'title' => 'currency_create',
            ],
            [
                'id'    => 180,
                'title' => 'currency_edit',
            ],
            [
                'id'    => 181,
                'title' => 'currency_show',
            ],
            [
                'id'    => 182,
                'title' => 'currency_delete',
            ],
            [
                'id'    => 183,
                'title' => 'currency_access',
            ],
            [
                'id'    => 184,
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => 185,
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => 186,
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => 187,
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => 188,
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => 189,
                'title' => 'income_source_create',
            ],
            [
                'id'    => 190,
                'title' => 'income_source_edit',
            ],
            [
                'id'    => 191,
                'title' => 'income_source_show',
            ],
            [
                'id'    => 192,
                'title' => 'income_source_delete',
            ],
            [
                'id'    => 193,
                'title' => 'income_source_access',
            ],
            [
                'id'    => 194,
                'title' => 'client_status_create',
            ],
            [
                'id'    => 195,
                'title' => 'client_status_edit',
            ],
            [
                'id'    => 196,
                'title' => 'client_status_show',
            ],
            [
                'id'    => 197,
                'title' => 'client_status_delete',
            ],
            [
                'id'    => 198,
                'title' => 'client_status_access',
            ],
            [
                'id'    => 199,
                'title' => 'project_status_create',
            ],
            [
                'id'    => 200,
                'title' => 'project_status_edit',
            ],
            [
                'id'    => 201,
                'title' => 'project_status_show',
            ],
            [
                'id'    => 202,
                'title' => 'project_status_delete',
            ],
            [
                'id'    => 203,
                'title' => 'project_status_access',
            ],
            [
                'id'    => 204,
                'title' => 'client_management_access',
            ],
            [
                'id'    => 205,
                'title' => 'client_create',
            ],
            [
                'id'    => 206,
                'title' => 'client_edit',
            ],
            [
                'id'    => 207,
                'title' => 'client_show',
            ],
            [
                'id'    => 208,
                'title' => 'client_delete',
            ],
            [
                'id'    => 209,
                'title' => 'client_access',
            ],
            [
                'id'    => 210,
                'title' => 'project_create',
            ],
            [
                'id'    => 211,
                'title' => 'project_edit',
            ],
            [
                'id'    => 212,
                'title' => 'project_show',
            ],
            [
                'id'    => 213,
                'title' => 'project_delete',
            ],
            [
                'id'    => 214,
                'title' => 'project_access',
            ],
            [
                'id'    => 215,
                'title' => 'note_create',
            ],
            [
                'id'    => 216,
                'title' => 'note_edit',
            ],
            [
                'id'    => 217,
                'title' => 'note_show',
            ],
            [
                'id'    => 218,
                'title' => 'note_delete',
            ],
            [
                'id'    => 219,
                'title' => 'note_access',
            ],
            [
                'id'    => 220,
                'title' => 'document_create',
            ],
            [
                'id'    => 221,
                'title' => 'document_edit',
            ],
            [
                'id'    => 222,
                'title' => 'document_show',
            ],
            [
                'id'    => 223,
                'title' => 'document_delete',
            ],
            [
                'id'    => 224,
                'title' => 'document_access',
            ],
            [
                'id'    => 225,
                'title' => 'transaction_create',
            ],
            [
                'id'    => 226,
                'title' => 'transaction_edit',
            ],
            [
                'id'    => 227,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 228,
                'title' => 'transaction_delete',
            ],
            [
                'id'    => 229,
                'title' => 'transaction_access',
            ],
            [
                'id'    => 230,
                'title' => 'client_report_create',
            ],
            [
                'id'    => 231,
                'title' => 'client_report_edit',
            ],
            [
                'id'    => 232,
                'title' => 'client_report_show',
            ],
            [
                'id'    => 233,
                'title' => 'client_report_delete',
            ],
            [
                'id'    => 234,
                'title' => 'client_report_access',
            ],
            [
                'id'    => 235,
                'title' => 'course_create',
            ],
            [
                'id'    => 236,
                'title' => 'course_edit',
            ],
            [
                'id'    => 237,
                'title' => 'course_show',
            ],
            [
                'id'    => 238,
                'title' => 'course_delete',
            ],
            [
                'id'    => 239,
                'title' => 'course_access',
            ],
            [
                'id'    => 240,
                'title' => 'lesson_create',
            ],
            [
                'id'    => 241,
                'title' => 'lesson_edit',
            ],
            [
                'id'    => 242,
                'title' => 'lesson_show',
            ],
            [
                'id'    => 243,
                'title' => 'lesson_delete',
            ],
            [
                'id'    => 244,
                'title' => 'lesson_access',
            ],
            [
                'id'    => 245,
                'title' => 'test_create',
            ],
            [
                'id'    => 246,
                'title' => 'test_edit',
            ],
            [
                'id'    => 247,
                'title' => 'test_show',
            ],
            [
                'id'    => 248,
                'title' => 'test_delete',
            ],
            [
                'id'    => 249,
                'title' => 'test_access',
            ],
            [
                'id'    => 250,
                'title' => 'question_create',
            ],
            [
                'id'    => 251,
                'title' => 'question_edit',
            ],
            [
                'id'    => 252,
                'title' => 'question_show',
            ],
            [
                'id'    => 253,
                'title' => 'question_delete',
            ],
            [
                'id'    => 254,
                'title' => 'question_access',
            ],
            [
                'id'    => 255,
                'title' => 'question_option_create',
            ],
            [
                'id'    => 256,
                'title' => 'question_option_edit',
            ],
            [
                'id'    => 257,
                'title' => 'question_option_show',
            ],
            [
                'id'    => 258,
                'title' => 'question_option_delete',
            ],
            [
                'id'    => 259,
                'title' => 'question_option_access',
            ],
            [
                'id'    => 260,
                'title' => 'test_result_create',
            ],
            [
                'id'    => 261,
                'title' => 'test_result_edit',
            ],
            [
                'id'    => 262,
                'title' => 'test_result_show',
            ],
            [
                'id'    => 263,
                'title' => 'test_result_delete',
            ],
            [
                'id'    => 264,
                'title' => 'test_result_access',
            ],
            [
                'id'    => 265,
                'title' => 'test_answer_create',
            ],
            [
                'id'    => 266,
                'title' => 'test_answer_edit',
            ],
            [
                'id'    => 267,
                'title' => 'test_answer_show',
            ],
            [
                'id'    => 268,
                'title' => 'test_answer_delete',
            ],
            [
                'id'    => 269,
                'title' => 'test_answer_access',
            ],
            [
                'id'    => 270,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 271,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 272,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 273,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 274,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 275,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 276,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 277,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 278,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 279,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 280,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 281,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
