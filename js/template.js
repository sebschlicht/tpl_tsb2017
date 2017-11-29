jQuery.noConflict();
jQuery(document).ready(function () {
  
  // toggle mobile menu toggle class
  var onNavbarToggleClick = function ( e ) {
    var $toggle = jQuery(this),
        $menu = jQuery($toggle.attr('data-menu'));
    
    $toggle.toggleClass('open-menu').toggleClass('close-menu');
    $menu.toggleClass('expanded-menu');
    var targetHeight = $toggle.hasClass( 'close-menu' ) ? $menu[0].scrollHeight : '';
    $menu.css( 'height', targetHeight );
    
    e.stopPropagation();
    return false;
  };
  jQuery( '.navbar-toggle' ).on( 'click', onNavbarToggleClick );
  
  // enable SEF banner tracking
  enableSefBannerTracking();
  
  // shorten slider descriptions
  shortenSliderDescription();
  
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
      }
    }, 5 );
  } );
  
  function shortenSliderDescription() {  
    jQuery( '#slider' ).find( '.textbox' ).find( '.text' ).each( function( i ) {
      
      
      function narrowTextHeight( $e, maxHeight, step ) {
        if (step < 1) {
          return;
        }
        
        var newHeight = 0,
            fullText = $e.text(),
            numChars = fullText.length;
        
        do {
          
          numChars -= step;
          $e.text( $e.text().slice( 0, numChars ) );
          
        } while( $e.outerHeight() > maxHeight );
        
        // leave more characters if making large steps
        if ( step > 1 ) {
          numChars += step;
        }
        
        // append suffix
        var suffix = '...';
        if ( !$e.text().endsWith( suffix ) ) {
          $e.text( fullText.slice(0, numChars - suffix.length).trim() + suffix );
        }
      }
      
      var $desc = jQuery( this ),
          maxHeight = $desc.css( 'max-height' ).slice( 0, -2 );
      
      // find first child which exceed max height
      var $cutChild = null,
          totalChildHeight = 0;
      $desc.children( ':first-child' ).children().each( function( i ) {
        $cutChild = jQuery( this );
        totalChildHeight += $cutChild.outerHeight();
        
        if ( totalChildHeight > maxHeight ) {
          return false;
        }
      } );
      if ( totalChildHeight <= maxHeight ) {
        $cutChild = null;
      } else {
        totalChildHeight -= $cutChild.outerHeight();
      }
      
      if ( $cutChild !== null ) {
        
        // narrow text length
        $desc.addClass( 'cut' );
        var heightLeft = maxHeight - totalChildHeight;
                
        narrowTextHeight( $cutChild, heightLeft, 20 );
        narrowTextHeight( $cutChild, heightLeft, 1 );
        $cutChild.nextAll().remove();
      }
      
    } );
  }
  
  /**
   * Allows to track banners in SEF module style.
   */
  function enableSefBannerTracking() {
    var onBannerClick = function() {
      var $link = jQuery( this );

      // swap tracking URL back
      $link.attr( 'href', $link.attr( 'data-trackUrl' ) );

      // swap target URL in again, after the click has been processed
      setTimeout( function() {
          $link.attr( 'href', $link.attr( 'data-targetUrl' ) );
      }, 10 );
    };
    
    jQuery( '.banneritem' ).each(function(i, e) {
      var $banner = jQuery( e ),
          $a = $banner.find( 'a' );
      if ( $a.attr( 'data-trackUrl' ) && $a.attr( 'data-targetUrl' ) ) {
        $a.attr( 'href', $a.attr( 'data-targetUrl' ) );
        $a.on('click', onBannerClick);
      }
    });
  }
    
  function isXs() {
    return jQuery( '#isXs' ).is( ':visible' );
  }
  
} );
