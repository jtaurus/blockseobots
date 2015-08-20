<?php

namespace Jtaurus\BlockSeoBots\ServiceProviders;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use Jtaurus\BlockSeoBots\Services\BlockSeoBots;

class BlockSeoBotsServiceProvider extends ServiceProvider{

	public function register(){
	$this->app->bind('BlockSeoBots', function(){
		return $this->app->make(BlockSeoBots::class);
	});
	}
}