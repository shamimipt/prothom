( function() {
	const openBtn = document.getElementById( 'mobile-button-open' );
	const closeBtn = document.getElementById( 'mobile-button-close' );

	openBtn.addEventListener( 'click', function() {
		document.getElementById( 'mobile-toggle-menu' ).style.width = '320px';
	} );

	closeBtn.addEventListener( 'click', function() {
		document.getElementById( 'mobile-toggle-menu' ).style.width = '0';
	} );
}() );
