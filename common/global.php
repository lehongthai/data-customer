<?php
/**
 * Created by PhpStorm.
 * User: thai
 * Date: 6/21/2017
 * Time: 1:54 PM
 */
class MessageProduct {
    /**
     * Title product
     */
    const TITLE_INDEX = 'List product';
    const TITLE_EDIT = 'Update product';
    const TITLE_CREATE = 'Create product';
    const TITLE_SHOW = 'Detail product';

    /**
     * Message alert product
     */
    const CREATE_SUCCESS = 'Create new product success';
    const CREATE_FAILED = 'Create new product failed';
    const UPDATE_SUCCESS = 'Update product success';
    const UPDATE_FAILED = 'Update product failed';
    const DELETE_SUCCESS = 'Delete product success';
    const DELETE_FAILED = 'Delete product failed';
    const PRODUCT_DOES_NOT_EXIST = 'The product does not exist';
}

class MessageUser {
    /**
     * Title User
     */
    const TITLE_LOGIN = 'User login';
    const TITLE_LOGOUT = 'User logout';
    const TITLE_REGISTER = 'User register';
    const TITLE_INDEX = 'List user';
    const TITLE_PROFILE = 'User profile';
    const TITLE_EDIT = 'User update';

    /**
     * Message alert user
     */
    const UPDATE_SUCCESS = 'Update success';
}


class MessageTestConfig {
    /**
     * Title Test Config
     */
    const TITLE_INDEX = 'List config';
    const TITLE_EDIT = 'Update config';
    const TITLE_CREATE = 'Create config';
    const TITLE_SHOW = 'Detail config';

    /**
     * Message alert Test Config
     */
    const CREATE_SUCCESS = 'Create new config success';
    const CREATE_FAILED = 'Create new config failed';
    const UPDATE_SUCCESS = 'Update config success';
    const UPDATE_FAILED = 'Update config failed';
    const DELETE_SUCCESS = 'Delete config success';
    const DELETE_FAILED = 'Delete config failed';
    const CONFIG_DOES_NOT_EXIST = 'The config does not exist';
}

class MessageContact {
    /**
     * Title Test Config
     */
    const TITLE_INDEX = 'Contact Form';
    const TITLE_EDIT = 'Update config';
    const TITLE_CREATE = 'Create config';
    const TITLE_SHOW = 'Detail config';

    /**
     * Message contact alert
     */
    const SEND_SUCCESS = 'Send message success';
    const SEND_FAILED = 'Send message failed';
    const DELETE_SUCCESS = 'Delete contact success';
    const DELETE_FAILED = 'Delet contact failed';
    const CONTACT_DOES_NOT_EXIST = 'The contact does not exist';

}