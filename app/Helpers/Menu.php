
<?php
	class Menu{
		
	public static function navbartopleft(){
		return [
		[
			'path' => 'home',
			'label' => __('home'), 
			'icon' => '<i class="material-icons">extension</i>'
		],
		
		[
			'path' => 'children',
			'label' => __('children'), 
			'icon' => '<i class="material-icons">extension</i>'
		],
		
		[
			'path' => 'users',
			'label' => __('users'), 
			'icon' => '<i class="material-icons">extension</i>'
		]
	] ;
	}
	
		
	public static function gender(){
		return [
		[
			'value' => 'Male', 
			'label' => __('male'), 
		],
		[
			'value' => 'Female', 
			'label' => __('female'), 
		],] ;
	}
	
	}
