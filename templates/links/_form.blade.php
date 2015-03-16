{{$form = FormManager\Builder::form()}}
{{
	$form->attr([
	    'action' => isset($link) ? $app->urlFor('link.update', ['id' => $link->id]) : $app->urlFor('link.store'),
	    'method' => 'post'
	])->add([
	    'name' => FormManager\Builder::text()->addClass('form-control')->id('link_name')->placeholder('Name ej. twitter')->maxlength(64)->required()->label('Link Name'),
	    'url' => FormManager\Builder::text()->addClass('form-control')->id('link_url')->placeholder('Url ej. http://twitter.com')->maxlength(64)->required()->label('Link Url'),
	    'status' => FormManager\Builder::select()->options([
	    	'' => '-- Choose a Status --',
			'favorite' => 'Favoritos',
			'important' => 'Importante',
			'great' => 'Genial'
	    ])->addClass('form-control')->id('link_status')->required()->label('Link Status'),
	    'action' => FormManager\Builder::choose([
	        'save' => FormManager\Builder::submit()->addClass('btn btn-primary pull-right')->html('Save Link')
	    ])
	])
}}