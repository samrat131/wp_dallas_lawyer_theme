<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <input type="text" name="s" id="search" class="search-inputbox" value="<?php the_search_query(); ?>" placeholder="Search here" />
</form>