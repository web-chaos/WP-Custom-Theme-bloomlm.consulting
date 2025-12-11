<div class="search__form">
    <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="search" id="search-field" class="search-field" placeholder="<?php echo esc_attr( 'Search news', 'bloomlm' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
        <button type="submit" class="search-submit button btn-red"><?php echo esc_html( 'Search', 'bloomlm' ); ?></button>
    </form>
</div>