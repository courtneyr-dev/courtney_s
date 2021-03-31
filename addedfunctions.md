        
        // Add support for post formats
		add_theme_support( 'post-formats', array( 'aside', 'quote', 'status', 'image', 'gallery', 'chat', 'link', 'audio', 'video' ) );


        //starter content
		add_theme_support( 'starter-content' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( array( 
			'./assets/css/blocks.css',
			'./assets/css/style-shared.css',
			'./assets/css/style-editor.css', 
		) );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for custom units.
		add_theme_support( 'custom-units' );