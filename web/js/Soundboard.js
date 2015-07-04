var Soundboard = function ()
{
    var button_container;
    var audio;
    var audio_cache = {};

    this.Init = function ()
    {
        button_container = $( "#ButtonContainer" );
        if ( !button_container.length ) {
            throw "Could not find #ButtonContainer";
        }

        try {
            audio = new Audio();
            audio.volume = 1.0;
        }
        catch ( e ) {
            throw "Could not create Audio element: " + e;
        }

    };

    this.Load = function ()
    {

    };

    this.PlaySound = function ( sound_id )
    {
        var path;

        switch ( sound_id ) {
            case 0:
                path = "/assets/sounds/holmes_266_ughgross.ogg";
                break;
            case 1:
                path = "/assets/sounds/holmes_allshitandaids.ogg";
                break;
            case 2:
                path = "/assets/sounds/holmes_assisnotok.ogg";
                break;
            case 3:
                path = "/assets/sounds/holmes_buttdie.ogg";
                break;
            case 4:
                path = "/assets/sounds/holmes_dowhateveryouwant.ogg";
                break;
            default:
                break;
        }
        this.Play( path );
    };

    this.Play = function ( path )
    {
//        if (this.audio)
        audio.setAttribute( "src", path );
        audio.play();
    };

    this.StopSound = function ()
    {
        audio.pause();
    }

};

