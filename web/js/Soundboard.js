var Soundboard = function ()
{
    var button_container;
    var audio;
    var audio_cache = {};

    this.Init = function ()
    {
        //button_container = $( "#ButtonContainer" );
        //if ( !button_container.length ) {
        //    throw "Could not find #ButtonContainer";
        //}

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

    this.PlaySound = function ( sound_url )
    {
        var path = "/assets/sounds/" + sound_url;
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

