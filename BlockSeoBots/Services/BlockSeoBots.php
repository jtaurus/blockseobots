<?php

namespace Jtaurus\BlockSeoBots\Services;

use \Illuminate\Http\Request;

class BlockSeoBots{
	
	protected $request;

	protected $forbiddenUserAgentSubstrings = array(
		'ahrefsBot',
		'mjseo',
		'seomoz',
		'rogerbot');

	public function __construct(Request $request){
		$this->request = $request;
	}

	public function get_header(){
		return $this->request->header();
	}

	public function get_user_agent(){
		return $this->request->header("user-agent");
	}

	public function get_forbidden_user_agents(){
		return $this->forbiddenUserAgentSubstrings;
	}

	public function check_if_user_agent_is_forbidden(){
		return $this->check_if_user_agent_contains_forbidden_substring();
	}

	public function check_if_user_agent_contains_forbidden_substring(){
		foreach($this->forbiddenUserAgentSubstrings as $oneUserAgent){
			if(strpos(strtolower($this->get_user_agent()), strtolower($oneUserAgent)) !== false){
				return true;
			}
		}
		return false;
	}
}