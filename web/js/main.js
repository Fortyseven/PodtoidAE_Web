$( document ).ready( main );

var soundboard = null;
var carousel = null;

function main()
{

    carousel = new Carousel();
    try {
        carousel.Init();
    }
    catch ( e ) {
        throw "Could not initialize Carousel object: " + e;
    }

    soundboard = new Soundboard();
    soundboard.Init();
    soundboard.Load();
}


var Carousel = function ()
{
    var _container = null;
    var _pages = null;
    var _num_pages = 0;
    var _page_width_px = 0;
    var _current_page = 0;
    var _self = this;

    this.PageChangeRight = function ()
    {
        if ( _current_page == 0 ) return;
        $( _container ).animate( { "left": "+=" + _page_width_px + "px" }, "fast" );
        _current_page--;
    };
    this.PageChangeLeft = function ()
    {
        if ( _current_page == _num_pages - 1 ) return;
        $( _container ).animate( { "left": "-=" + _page_width_px + "px" }, "fast" );
        _current_page++;
    };

    this.Init = function ()
    {
        // locate root carousel container
        _container = $( "div#CarouselContainer" );
        if ( _container.length == 0 ) {
            throw "Could not find div.#CarouselContainer";
        }


        // locate pages inside carousel
        _pages = $( "div.page", _container );
        if ( _pages.length == 0 ) {
            throw "No div.pages defined in div#CarouselContainer";
        }

        _num_pages = _pages.length;

        console.log( "A", _container.css("width") );
        _container.css( "width", (100 * _num_pages) + "%" );
        console.log( "B", _container.css("width") );
        console.log("foo", (100 * _num_pages) + "%");
        _page_width_px = _container.width() / _num_pages;
        _pages.each( function ( e )
                     {
                         $( this ).width( _page_width_px );
                     } );

        console.log( "Found " + _num_pages + " at " + _page_width_px + "px each" );

        $( window ).swipe( {
                               swipe: function ( event, direction, duration, fingerCount, fingerData )
                               {
                                   if ( direction == "left" ) {
                                       _self.PageChangeLeft();
                                   }
                                   else if ( direction == "right" ) {
                                       _self.PageChangeRight();
                                   }

                               }
                           } );
    }
}
