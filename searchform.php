<form method="get" action="<?php echo esc_url(home_url()); ?>" class="form-search" role="search">
    <input type="text"
        placeholder="<?php esc_attr_e('Search...', 'intothedark'); ?>"
        name="s"
        value="<?php echo isset($_GET['s']) ? esc_attr($_GET['s']) : ''; ?>">
    <button type="submit">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/search-outline.svg" alt="search" class="icon-white">
    </button>
</form>