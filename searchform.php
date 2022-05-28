<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
    <input type="search" class="form-control" placeholder="Search" value="<?php echo get_search_query() ?>" name="s" title="Start your search here" />
	
	<span class="input-group-btn">
		<button type="submit" class="btn search-icon"><i class="fa fa-search"></i></button>
	</span>    
</form>