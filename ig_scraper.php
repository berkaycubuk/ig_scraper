<?php

/*
Designed and created by Berkay Çubuk
*/

class IG_Scraper {
	//variables
	public $json;
	public $username;
	public $biography;
	public $external_url;
	public $external_url_linkshimmed;
	public $followed_count;
	public $follow_count;
	public $full_name;
	public $has_channel;
	public $has_blocked_viewer;
	public $id;
	public $is_business_account;
	public $is_joined_recently;
	public $business_category_name;
	public $category_id;
	public $overall_category_name;
	public $is_private;
	public $is_verified;
	public $picture;
	public $picture_hd;
	public $connected_fb_page;

	//splitting function
	function __construct($username) {	
		$url = "https://instagram.com/" . $username . "/?__a=1";

		//get json output
		$data = file_get_contents($url);

		$this->json = $data;

		//decoded json ouput
		$data = json_decode($data);

		$this->username = $username;
		$this->biography = $data->graphql->user->biography;
		$this->external_url = $data->graphql->user->external_url;
		$this->external_url_linkshimmed = $data->graphql->user->external_url_linkshimmed;
		$this->followed_count = $data->graphql->user->edge_followed_by->count;
		$this->follow_count = $data->graphql->user->edge_follow->count;
		$this->full_name = $data->graphql->user->full_name;
		$this->id = $data->graphql->user->id;
		$this->is_private = $data->graphql->user->is_private;
		$this->is_verified = $data->graphql->user->is_verified;
		$this->picture = $data->graphql->user->profile_pic_url;
		$this->picture_hd = $data->graphql->user->profile_pic_url_hd;
		$this->connected_fb_page = $data->graphql->user->connected_fb_page;
	}

	//return all json data
	function json() {
		return $this->json;
	}

	//return biogprahy
	function biography() {
		return $this->biography;
	}

	//return username
	function username() {
		return $this->username;
	}

	//return external_url
	function external_url() {
		return $this->external_url;
	}

	//return external_url_linkshimmed
	function external_url_linkshimmed() {
		return $this->external_url_linkshimmed;
	}

	//return followed_count
	function followed_count() {
		return $this->followed_count;
	}

	//return follow_count
	function follow_count() {
		return $this->follow_count;
	}

	//return full_name
	function full_name() {
		return $this->full_name;
	}

	//return has_channel
	function has_channel() {
		return $this->has_channel;
	}

	//return has_blocked_viewer
	function has_blocked_viewer() {
		return $this->has_blocked_viewer;
	}

	//return id
	function id() {
		return $this->id;
	}

	//return is_business_account
	function is_business_account() {
		return $this->is_business_account;
	}

	//return is_joined_recently
	function is_joined_recently() {
		return $this->is_joined_recently;
	}

	//return business_category_name
	function business_category_name() {
		return $this->business_category_name;
	}

	//return category_id
	function category_id() {
		return $this->category_id;
	}

	//return overall_category_name
	function overall_category_name() {
		return $this->overall_category_name;
	}

	//return is_private
	function is_private() {
		return $this->is_private;
	}

	//return is_verified
	function is_verified() {
		return $this->is_verified;
	}

	//return picture
	function picture() {
		return $this->picture;
	}

	//return picture_hd
	function picture_hd() {
		return $this->picture_hd;
	}

	//return connected_fb_page
	function connected_fb_page() {
		return $this->connected_fb_page;
	}

}