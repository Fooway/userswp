<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * UsersWP UsersWP_Defaults.
 *
 * A place to store default values used in many places.
 *
 * @class    UsersWP_Defaults
 * @package  UsersWP/Classes
 * @category Class
 * @author   AyeCode
 */
class UsersWP_Defaults {

    /**
     * The new user account registration email subject default.
     *
     * @return mixed|void
     */
    public static function email_user_activation_subject(){
        return apply_filters('uwp_email_user_activation_subject',__("[[#site_name#]] Please activate your account","userswp"));
    }

    /**
     * The new user account registration email body default.
     *
     * @return mixed|void
     */
    public static function email_user_activation_body(){
        return apply_filters('uwp_email_user_activation_body',
            __("Dear [#user_name#],

Thank you for signing up with [#site_name#]

[#login_details#]

Thank you,
[#site_name_url#]","userswp"
            )
        );
    }

    /**
     * The registration success email subject default.
     *
     * @return mixed|void
     */
    public static function registration_success_email_subject(){
        return apply_filters('uwp_registration_success_email_subject',__("[[#site_name#]] Your Log In Details","userswp"));
    }

    /**
     * The registration success email body default.
     *
     * @return mixed|void
     */
    public static function registration_success_email_body(){
        return apply_filters('uwp_registration_success_email_body',
            __("Dear [#user_name#],

You can log in  with the following information:

[#login_details#]

You can login here: [#login_url#]

Thank you,
[#site_name_url#]","userswp"
            )
        );
    }

    /**
     * The forgot password email subject default.
     *
     * @return mixed|void
     */
    public static function forgot_password_email_subject(){
        return apply_filters('uwp_forgot_password_email_subject',__("[#site_name#] - Your new password","userswp"));
    }

    /**
     * The forgot password email body default.
     *
     * @return mixed|void
     */
    public static function forgot_password_email_body(){
        return apply_filters('uwp_forgot_password_email_body',
            __("Dear [#user_name#],

[#login_details#]

You can login here: [#login_url#]

Thank you,
[#site_name_url#]","userswp"
            )
        );
    }

    /**
     * The change password email subject default.
     *
     * @return mixed|void
     */
    public static function change_password_email_subject(){
        return apply_filters('uwp_change_password_email_subject',__("[#site_name#] - Password has been changed","userswp"));
    }

    /**
     * The change password email body default.
     *
     * @return mixed|void
     */
    public static function change_password_email_body(){
        return apply_filters('uwp_change_password_email_body',
            __("Dear [#user_name#],

Your password has been changed successfully.

You can login here: [#login_url#]

Thank you,
[#site_name_url#]","userswp"
            )
        );
    }

    /**
     * The reset password email subject default.
     *
     * @return mixed|void
     */
    public static function reset_password_email_subject(){
        return apply_filters('uwp_reset_password_email_subject',__("[#site_name#] - Password has been reset","userswp"));
    }

    /**
     * The reset password email body default.
     *
     * @return mixed|void
     */
    public static function reset_password_email_body(){
        return apply_filters('uwp_reset_password_email_body',
            __("Dear [#user_name#],

Your password has been reset.

You can login here: [#login_url#]

Thank you,
[#site_name_url#]","userswp"
            )
        );
    }

    /**
     * The update account email subject default.
     *
     * @return mixed|void
     */
    public static function update_account_email_subject(){
        return apply_filters('uwp_update_account_email_subject',__("[#site_name#] - Account has been updated","userswp"));
    }

    /**
     * The update account email body default.
     *
     * @return mixed|void
     */
    public static function update_account_email_body(){
        return apply_filters('uwp_update_account_email_body',
            __("Dear [#user_name#],

Your account has been updated successfully.

Thank you,
[#site_name_url#]","userswp"
            )
        );
    }

	/**
	 * The new user account registration email subject default.
	 *
	 * @return mixed|void
	 */
	public static function email_user_new_account_subject(){
		return apply_filters('uwp_email_user_new_account_subject',__("[[#site_name#]] New account registration","userswp"));
	}

	/**
	 * The new user account registration email body default.
	 *
	 * @return mixed|void
	 */
	public static function email_user_new_account_body(){
		return apply_filters('uwp_email_user_new_account_body',
			__("Dear [#user_name#],

A user has been registered recently on your website.

[#extras#]","userswp"
			)
		);
	}

}


