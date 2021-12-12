<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;
use App\Filters\FilterAdmin;
use App\Filters\FilterWriter;

class Filters extends BaseConfig
{
	/**
	 * Configures aliases for Filter classes to
	 * make reading things nicer and simpler.
	 *
	 * @var array
	 */
	public $aliases = [
		'csrf'     => CSRF::class,
		'toolbar'  => DebugToolbar::class,
		'honeypot' => Honeypot::class,
		'filteradmin' => FilterAdmin::class,
		'filterwriter' => FilterWriter::class,
	];

	/**
	 * List of filter aliases that are always
	 * applied before and after every request.
	 *
	 * @var array
	 */
	public $globals = [
		// can be access before login
		'before' => [
			// 'honeypot',
			// 'csrf',
			'filteradmin' => ['except' => [
				'/', 'ViewController/index',
				'/login', 'AuthController/login',
				'/kegiatan', 'ViewController/activityIndex',
			]],
		],
		// can be access after login
		'after'  => [
			// 'honeypot',
			'toolbar',
			'filteradmin' => ['except' => [
				// Viewer Side
				'/', 'ViewController/index',
				'/sejarah', 'ViewController/history',
				'/visi-dan-misi', 'ViewController/vissionMission',
				'/fasilitas', 'ViewController/facility',
				'/tenaga-pendidik', 'ViewController/teacherIndex',
				'/tenaga-pendidik/*', 'ViewController/teacherDetail/*',
				'/kegiatan', 'ViewController/activityIndex',
				'/kegiatan/*', 'ViewController/*',

				// Admin Side & Auth
				'/dashboard', 'AdminController/dashboard',
				// Update Profile
				'/logout', 'AuthController/logout',

				// User
				'/pengguna', 'UserController/index',
				'/pengguna/*', 'UserController/*',
				'/save-user', 'UserController/save',
				'/save-user-update/*', 'UserController/edit/*',
				'/delete-user/*', 'UserController/delete/*',

				// Profile
				'/admin/visi-misi', 'ProfileController/index',
				'/admin/visi-misi/*', 'ProfileController/*',
				'/admin/sejarah', 'ProfileController/history',
				'/save-profile', 'ProfileController/save',
				'/save-profile-update/*', 'ProfileController/edit/*',
				'/update-history/*', 'ProfileController/updateHistory/*',
				'/delete-history/*', 'ProfileController/deleteHistory/*',
				'/delete-profile/*', 'ProfileController/delete/*',

				// Facility
				'/admin/fasilitas', 'FacilityController/index',
				'/admin/fasilitas/*', 'FacilityController/*',
				'/save-facility', 'FacilityController/save',
				'/save-facility-update/*', 'FacilityController/edit/*',
				'/delete-facility/*', 'FacilityController/delete/*',

				// Headmaster & Teacher
				'/admin/tenaga-pendidik', 'TeacherController/index',
				'/admin/kepala-sekolah', 'TeacherController/indexHeadmaster',
				'/admin/tenaga-pendidik/*', 'TeacherController/*',
				'/save-teacher', 'TeacherController/save',
				'/save-teacher-update/*', 'TeacherController/edit/*',
				'/admin/kepala-sekolah/update/*', 'TeacherController/updateHeadmaster/*',
				'/save-headmaster-update/*', 'TeacherController/edit/*',
				'/delete-teacher/*', 'TeacherController/delete/*',
				'/delete-headmaster/*', 'TeacherController/deleteHeadmaster/*',

				// Staff
				'/admin/tenaga-kependidikan', 'StaffController/index',
				'/admin/tenaga-kependidikan/*', 'StaffController/*',
				'/save-staff', 'StaffController/save',
				'/save-staff-update/*', 'StaffController/edit/*',
				'/delete-staff/*', 'StaffController/delete/*',

				// Achievement
				'/admin/prestasi', 'AchievementController/index',
				'/admin/prestasi/*', 'AchievementController/*',
				'/save-achievement', 'AchievementController/save',
				'/save-achievement-update/*', 'AchievementController/edit/*',
				'/delete-achievement/*', 'AchievementController/delete/*',

				// Rules
				// Students
				// Code of Conduct
				// Calendar
				// Activity
				'/admin/kegiatan', 'ActivityController/index',
				'/admin/kegiatan/*', 'ActivityController/*',
				'/save-activity', 'ActivityController/save',
				'/save-activity-update/*', 'ActivityController/edit/*',
				'/delete-activity/*', 'ActivityController/delete/*',

				// Announcement
				// Comment
				'/admin/komentar', 'CommentController/index',
				'/save-comment-update/*', 'CommentController/edit/*',
				'/delete-comment/*', 'CommentController/delete/*',
				
				// Gallery
				// Change Profile
				// Logout
			]],
			
		],
	];

	/**
	 * List of filter aliases that works on a
	 * particular HTTP method (GET, POST, etc.).
	 *
	 * Example:
	 * 'post' => ['csrf', 'throttle']
	 *
	 * @var array
	 */
	public $methods = [];

	/**
	 * List of filter aliases that should run on any
	 * before or after URI patterns.
	 *
	 * Example:
	 * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
	 *
	 * @var array
	 */
	public $filters = [];
}
