"use strict";

const KEY_LEFT = 39;
const KEY_RIGHT = 37;
const KEY_ESC = 27;

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

function ShowHelp()
{
    //alert( "TBI" );
    if ( $( "#HelpBox" ).hasClass( "show" ) ) {
        $( "#HelpBox" ).removeClass( "show" ).addClass( "hide" );
    }
    else {
        $( "#HelpBox" ).removeClass( "hide" ).addClass( "show" );
    }
}


var Carousel = function ()
{
    var _container = null;
    var _pages = null;
    var _num_pages = 0;
    var _page_width_px = 0;
    var _current_page = 0;
    var _self = this;

    this.updatePagePosition = function ()
    {
        $( _container ).css( "transform", "translateX(" + -(_page_width_px * _current_page) + "px" );
    };

    this.PageChangeRight = function ()
    {
        if ( _current_page == 0 ) return;
        _current_page--;
        _self.updatePagePosition();
    };

    this.PageChangeLeft = function ()
    {
        if ( _current_page >= _num_pages - 1 ) return;
        _current_page++;
        _self.updatePagePosition();
    };

    this.Init = function ()
    {
        // locate root carousel container
        _container = $( "div#CarouselContainer" );
        if ( _container.length == 0 ) {
            throw "Could not find div#CarouselContainer";
        }

        // locate pages inside carousel
        _pages = $( "div.page", _container );
        if ( _pages.length == 0 ) {
            throw "No div.pages defined in div#CarouselContainer";
        }

        _container.css( 'padding-top', $( "#Header" ).height() )
                .css( 'padding-bottom', $( "#Footer" ).height() );

        _num_pages = _pages.length;

        _container.css( "width", (100 * _num_pages) + "%" );
        _page_width_px = _container.width() / _num_pages;
        _pages.each( function ( e )
                     {
                         $( this ).width( _page_width_px );
                     } );

        console.log( "Found " + _num_pages + " at " + _page_width_px + "px each" );

        $( "#HelpBox" ).click(
                function ()
                {
                    ShowHelp();
                }
        );

        $( window ).swipe(
                {
                    swipeLeft:       _self.PageChangeLeft,
                    swipeRight:      _self.PageChangeRight,
                    allowPageScroll: "vertical"
                } );

        // Little bit of keyboard love, because why not?
        $( window ).keydown(
                function ( e )
                {
                    if ( e.keyCode == KEY_LEFT ) {
                        _self.PageChangeLeft();
                    }
                    else if ( e.keyCode == KEY_RIGHT ) {
                        _self.PageChangeRight();
                    }
                    else if ( e.keyCode == KEY_ESC ) {
                        soundboard.StopSound();
                    }

                }
        );
    }
}
