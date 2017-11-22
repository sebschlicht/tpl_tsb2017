jQuery.noConflict();
jQuery( document ).ready(function () {
  
  // toggle mobile menu toggle class
  var onNavbarToggleClick = function () {
    var $toggle = jQuery( this );
    var $target = jQuery( $toggle.attr( 'data-target' ) );
    if ( !$target.hasClass( 'collapsing' ) ) {
      $toggle.toggleClass( 'open' ).toggleClass( 'closed' );
    }
  };
  jQuery( '.navbar-toggle' ).on( 'click', onNavbarToggleClick );
  
  // hide ugly banner links
  var onBannerClick = function() {
    var $link = jQuery( this );
    
    // swap tracking URL back
    $link.attr( 'href', $link.attr( 'data-trackUrl' ) );
    
    // swap target URL in again, after the click has been processed
    setTimeout( function() {
        $link.attr( 'href', $link.attr( 'data-targetUrl' ) );
    }, 10 );
  };
  jQuery( '.banneritem' ).each( function( i, e ) {
    var $banner = jQuery( e );
    var $a = $banner.find( 'a' );
    if ( $a.attr( 'data-trackUrl' ) && $a.attr( 'data-targetUrl' ) ) {  
      $a.attr( 'href', $a.attr( 'data-targetUrl' ) );
      $a.on('click', onBannerClick);
    }
  } );
  
  // resize gallery images to full size in XS
  var $images = null;
  jQuery( window ).resize( function () {
    setTimeout( function () {
      if ( $images === null ) {
        $images = jQuery( '.ba-image img' );
      }
      if ( $images.length && isXs() ) {
        $images.css('width', '100%');
        $images.css('height', 'auto');
        console.log( 'resizing' );
      }
    }, 5 );
  } );
    
  function isXs() {
    return jQuery( '#isXs' ).is( ':visible' );
  }
  
});
