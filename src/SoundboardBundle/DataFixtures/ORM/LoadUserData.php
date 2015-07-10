<?php

    use Doctrine\Common\DataFixtures\FixtureInterface;
    use Doctrine\Common\Persistence\ObjectManager;
    use SoundboardBundle\Entity\Category;
    use SoundboardBundle\Entity\Soundclip;

    class LoadUserData implements FixtureInterface
    {

        /**
         * Load data fixtures with the passed EntityManager
         *
         * @param ObjectManager $manager
         */
        public function load( ObjectManager $manager )
        {
            $this->loadCategories( $manager );
            $manager->flush();
            $this->loadDefaultSoundClips( $manager );
            $manager->flush();
        }

        private function loadCategories( ObjectManager $manager )
        {
            $cat = new Category();
            $cat->setName( "Sterling" );
            $manager->persist( $cat );

            $cat = new Category();
            $cat->setName( "Holmes" );
            $manager->persist( $cat );

            $cat = new Category();
            $cat->setName( "Zimmerman" );
            $manager->persist( $cat );

            $cat = new Category();
            $cat->setName( "Other" );
            $manager->persist( $cat );
        }

        private function loadDefaultSoundClips( ObjectManager $manager )
        {
            $sterling_id = $manager->getRepository( "SoundboardBundle:Category" )->findOneBy( [ "name" => "Sterling" ] );
            $holmes_id   = $manager->getRepository( "SoundboardBundle:Category" )->findOneBy( [ "name" => "Holmes" ] );
            $zim_id      = $manager->getRepository( "SoundboardBundle:Category" )->findOneBy( [ "name" => "Zimmerman" ] );
            $other_id    = $manager->getRepository( "SoundboardBundle:Category" )->findOneBy( [ "name" => "Other" ] );

            $this->createClip( $manager, $holmes_id, "Ugh, gross", "Ugh, gross", "holmes_266_ughgross.ogg" );
            $this->createClip( $manager, $holmes_id, "All shit and AIDS", "Shit'n'AIDS", "holmes_allshitandaids.ogg" );
            $this->createClip( $manager, $holmes_id, "My ass is NOT okay...", "Ass not okay", "holmes_assisnotok.ogg" );
            $this->createClip( $manager, $holmes_id, "Bicycle butt", "Bicycle", "holmes_buttdie.ogg" );
            $this->createClip( $manager, $holmes_id, "Do whatever you want", "Do whatever", "holmes_dowhateveryouwant.ogg" );
            $this->createClip( $manager, $holmes_id, "Yeah!", "Yeah!", "holmes_excitedyeah.ogg" );
            $this->createClip( $manager, $holmes_id, "Hey guys, got any chips?", "Got any chips?", "holmes_heyguyschips.ogg" );
            $this->createClip( $manager, $holmes_id, "Not that special", "Not special", "holmes_notthatspecial.ogg" );
            $this->createClip( $manager, $holmes_id, "When a nude man...", "Nude man...", "holmes_nudeman.ogg" );
            $this->createClip( $manager, $holmes_id, "Owls are hot", "Owls hot", "holmes_owlsarehot.ogg" );
            $this->createClip( $manager, $holmes_id, "Pretty big butthole", "Big hole", "holmes_prettybigforabutthole.ogg" );
            $this->createClip( $manager, $holmes_id, "Remember skeleton dick?", "Remember skeleton", "holmes_rememberskeletondick.ogg" );
            $this->createClip( $manager, $holmes_id, "Safe space", "Safe space", "holmes_safespace.ogg" );
            $this->createClip( $manager, $holmes_id, "Sexy noises", "Sexy noises", "holmes_sexynoises.ogg" );
            $this->createClip( $manager, $holmes_id, "So funny", "So funny", "holmes_sofunnysofunny.ogg" );
            $this->createClip( $manager, $holmes_id, "So much older", "So much older", "holmes_somucholder.ogg" );
            $this->createClip( $manager, $holmes_id, "We like you", "We like you", "holmes_welikeyou.ogg" );
            $this->createClip( $manager, $holmes_id, "What?", "What?", "holmes_what.ogg" );
            $this->createClip( $manager, $holmes_id, "Every time I say Wii", "Every time Wii", "holmes_wii.ogg" );

            $this->createClip( $manager, $other_id, "Group agreement", "Agreement", "other_agreement.ogg" );
            $this->createClip( $manager, $other_id, "Hedgehog Croquet", "Hedgehog", "other_hedgehog.ogg" );
            $this->createClip( $manager, $other_id, "Little white tail", "White tail", "other_littlewhitetail.ogg" );
            $this->createClip( $manager, $other_id, "Fetch me my lust gurney!", "Lust Gurney", "other_lustgurney.ogg" );
            $this->createClip( $manager, $other_id, "Owls are fuckers", "Owls", "other_owlsarefuckers.ogg" );
            $this->createClip( $manager, $other_id, "Theme 1-Reptile (Skrillex)", "Theme-Reptile", "other_theme_1.ogg" );
            $this->createClip( $manager, $other_id, "Theme 2-Main Theme (Metal Arms)", "Theme-Metal Arms", "other_theme_2.ogg" );
            $this->createClip( $manager, $other_id, "Theme 3-Zed Boss Battle (Lollipop Chainsaw)", "Theme-Zed", "other_theme_3.ogg" );
            $this->createClip( $manager, $other_id, "Theme 4-Rave On (Killer 7)", "Theme-Rave On", "other_theme_4.ogg" );
            $this->createClip( $manager, $other_id, "72", "YYY", "other_theme_6.ogg" );
            $this->createClip( $manager, $other_id, "Trent-Took an arrow...", "Took an arrow...", "other_trent_skyrim.ogg" );
            $this->createClip( $manager, $other_id, "Women who have wheels...", "Women with wheels", "other_womenwithwheels.ogg" );

            $this->createClip( $manager, $sterling_id, "Come on!", "", "sterling_266_comeon.ogg" );
            $this->createClip( $manager, $sterling_id, "Yyyyyeeaaah!", "YEAH!", "sterling_yeeaaah.ogg" );
            $this->createClip( $manager, $sterling_id, "Right?", "Right?", "sterling_right.ogg" );
            $this->createClip( $manager, $sterling_id, "Scream", "Scream", "sterling_scream.ogg" );
            $this->createClip( $manager, $sterling_id, "Laugh", "Laugh", "sterling_laugh1.ogg" );

            $this->createClip( $manager, $sterling_id, "Double Erections", "", "sterling_266_doubleerections.ogg" );
            $this->createClip( $manager, $sterling_id, "Melting Barstools", "Barstools", "sterling_266_hotbod.ogg" );
            $this->createClip( $manager, $sterling_id, "Laughing at Animal Abuse", "Animal Abuse", "sterling_animalabuse.ogg" );
            $this->createClip( $manager, $sterling_id, "Burning Cat", "", "sterling_burningcat.ogg" );
            $this->createClip( $manager, $sterling_id, "Bury Me In The Sand Pit", "Sand Pit", "sterling_burymeinthesand.ogg" );
            $this->createClip( $manager, $sterling_id, "Can't Assume Super Powers", "Super Powers", "sterling_cantassume.ogg" );
            $this->createClip( $manager, $sterling_id, "Celebrity Icon", "", "sterling_celebicon.ogg" );
            $this->createClip( $manager, $sterling_id, "Don't Forget To Vote", "Don't Forget", "sterling_dafoe_democrat.ogg" );
            $this->createClip( $manager, $sterling_id, "Dafoe - Farmer Animals", "Farmer Animals", "sterling_dafoe_farmeranimals.ogg" );
            $this->createClip( $manager, $sterling_id, "Dafoe - Say Hello To The Sun!", "Say Hello", "sterling_dafoe_hellosun.ogg" );
            $this->createClip( $manager, $sterling_id, "Dafoe - Hey Kids!", "Hey Kids", "sterling_dafoe_heykids_short.ogg" );
            $this->createClip( $manager, $sterling_id, "Dafoe - Hey Kids! (Long)", "Hey Kids Long", "sterling_dafoe_heykids.ogg" );
            $this->createClip( $manager, $sterling_id, "Dafoe - Hey Kids! (Alt)", "Hey Kids Alt", "sterling_dafoe_heykids_alternate.ogg" );
            $this->createClip( $manager, $sterling_id, "Dafoe - Horse Named Keanu", "Keanu Horse", "sterling_dafoe_horsenamedkeanu.ogg" );
            $this->createClip( $manager, $sterling_id, "Dafoe - Just To Be Sure...", "That IS Penis", "sterling_dafoe_justtobesure.ogg" );
            $this->createClip( $manager, $sterling_id, "Dafoe - Skull Fuck Your Mothers", "Skull Fuck", "sterling_dafoe_skullfuck.ogg" );
            $this->createClip( $manager, $sterling_id, "Dafoe - White Gold!", "White Gold", "sterling_dafoe_whitegold.ogg" );
            $this->createClip( $manager, $sterling_id, "Dafoe - Yee haw!", "Yee haw!", "sterling_dafoe_yeehaw.ogg" );
            $this->createClip( $manager, $sterling_id, "Kick Disney's Head Off Elephant", "Disney's Head", "sterling_disneyshead.ogg" );
            $this->createClip( $manager, $sterling_id, "Given God's Power", "God's Power", "sterling_dogpiss.ogg" );
            $this->createClip( $manager, $sterling_id, "So Happy I'm Pregnant", "I'm Pregnant", "sterling_drinktheshit.ogg" );
            $this->createClip( $manager, $sterling_id, "Ducktales Erection", "", "sterling_ducktales_erection.ogg" );
            $this->createClip( $manager, $sterling_id, "Exactly", "", "sterling_exactly.ogg" );
            $this->createClip( $manager, $sterling_id, "Stuffing Fabergé Eggs", "Fabergé Eggs", "sterling_fabrige_eggs.ogg" );
            $this->createClip( $manager, $sterling_id, "Fatty Boom Boom", "", "sterling_fattyboomboom.ogg" );
            $this->createClip( $manager, $sterling_id, "Fuh fuh fuh fight!", "Fight!", "sterling_fight.ogg" );
            $this->createClip( $manager, $sterling_id, "Oh, for fucks sake.", "Fucks sake", "sterling_fuckssake.ogg" );
            $this->createClip( $manager, $sterling_id, "He is gonna cum ON ya!", "Cum Vicinity", "sterling_generalvicinity.ogg" );
            $this->createClip( $manager, $sterling_id, "Don't Give A Shit", "", "sterling_giveashit.ogg" );

            $this->createClip( $manager, $sterling_id, "SM - Why Isn't Holmes...Spider-Man?", "Holmes Spider-Man", "sterling_whyholmesspiderman.ogg" );
            $this->createClip( $manager, $sterling_id, "SM - Goddamnit Peter Parker!", "Parker!", "sterling_goddamnitparker.ogg" );
            $this->createClip( $manager, $sterling_id, "SM - Goddamnit Peter Parker! (Long)", "Parker! (Long)", "sterling_jameson_ex.ogg" );
            $this->createClip( $manager, $sterling_id, "SM - Get Me Spidered Man!", "Get Me", "sterling_jameson.ogg" );
            $this->createClip( $manager, $sterling_id, "SM - Haven't Been Bitten Right Spider", "Right Spider", "sterling_haventbeenbitten.ogg" );
            $this->createClip( $manager, $sterling_id, "SM - How Much Radiation?", "Laws of Averages", "sterling_law_of_averages.ogg" );
            $this->createClip( $manager, $sterling_id, "SM - We Got A Mind Meld", "Mind Meld", "sterling_mindmeld.ogg" );

            $this->createClip( $manager, $sterling_id, "Half Listening", "", "sterling_halflistening.ogg" );
            $this->createClip( $manager, $sterling_id, "I'm In The Mood to Be Aggressive ", "Have a go", "sterling_havago.ogg" );
            $this->createClip( $manager, $sterling_id, "My Hormones Are Out of Whack", "Hormones", "sterling_hormones.ogg" );
            $this->createClip( $manager, $sterling_id, "In The Mood for Birds", "In The Mood", "sterling_inthemood.ogg" );

            $this->createClip( $manager, $sterling_id, "Get Working Lazy Fat Cunt!", "Lazy Fat Cunt", "sterling_lazyfatcunt.ogg" );
            $this->createClip( $manager, $sterling_id, "So That'S A Letdown", "Letdown", "sterling_letdown.ogg" );
            $this->createClip( $manager, $sterling_id, "Gladly Lay Down My Life", "Lady Down Life", "sterling_lifeleavemybody.ogg" );
            $this->createClip( $manager, $sterling_id, "I Want My Massive Black Dildo Back", "Black Dildo", "sterling_massiveblackdildo.ogg" );

            $this->createClip( $manager, $sterling_id, "You No Good Piece of Shit!", "Piece of Shit!", "sterling_nogoodpieceofshit.ogg" );
            $this->createClip( $manager, $sterling_id, "Anus Pain Concern", "Anus Pain", "sterling_painus.ogg" );
            $this->createClip( $manager, $sterling_id, "Phil Collins - Feel It", "P.Collins 1", "sterling_philcollins2.ogg" );
            $this->createClip( $manager, $sterling_id, "Phil Collins - Drums", "P.Collins 2", "sterling_philcollins.ogg" );
            $this->createClip( $manager, $sterling_id, "Podtoid Drinking Game", "Drinking Game", "sterling_podtoiddrinkinggame.ogg" );
            $this->createClip( $manager, $sterling_id, "Podtoid Listeners Love Hearing...", "YYY", "sterling_podtoidlisteners.ogg" );
            $this->createClip( $manager, $sterling_id, "Preposterous Video Game Name", "Video Game Name", "sterling_preposterous_videogame.ogg" );
            $this->createClip( $manager, $sterling_id, "Profuse Sex Apologies", "Sex Apologies", "sterling_profuseapologies.ogg" );
            $this->createClip( $manager, $sterling_id, "Sheep In A Headlock", "Headlock", "sterling_sheepheadlock.ogg" );
            $this->createClip( $manager, $sterling_id, "Always Wanted To Slap a Horse", "Horse Slap", "sterling_slapahorse.ogg" );
            $this->createClip( $manager, $sterling_id, "Song 1", "Song #1", "sterling_song1.ogg" );
            $this->createClip( $manager, $sterling_id, "Song 2 (Kill the World)", "Song #2", "sterling_song2_killtheworld.ogg" );
            $this->createClip( $manager, $sterling_id, "Song 3", "Song #3", "sterling_song_hibbehdibbehdah.ogg" );
            $this->createClip( $manager, $sterling_id, "Song 4 (Suck a Duck Boner)", "Song #4", "sterling_suckaduckboner.ogg" );
            $this->createClip( $manager, $sterling_id, "Suck a Dick at Christmas", "Xmas Dick", "sterling_suckadickatxmas.ogg" );
            $this->createClip( $manager, $sterling_id, "Suck a Video Game Character's Cock", "Video Game Cock", "sterling_suckvideogames.ogg" );

            $this->createClip( $manager, $zim_id, "65", "YYY", "zim_266_swollenmember.ogg" );
            $this->createClip( $manager, $zim_id, "All fours", "All fours", "zim_allfours.ogg" );
            $this->createClip( $manager, $zim_id, "...bitten by every spider we can find?", "...bitten", "zim_areyousuggestingbitten.ogg" );
            $this->createClip( $manager, $zim_id, "66", "YYY", "zim_rebelteen.ogg" );
            $this->createClip( $manager, $zim_id, "Like a Russian sub", "Russian sub", "zim_russiansub.ogg" );
        }

        function createClip( ObjectManager $manager, $category, $title, $short_title, $filename )
        {
            $clip = new Soundclip();
            $clip->setTitle( $title );

            if ( empty( $short_title ) ) {
                $clip->setShortTitle( $title );
            }
            else {
                $clip->setShortTitle( $short_title );
            }

            $clip->setPath( $filename );
            $cat = new Category();
            $clip->setCategory( $category );
            $manager->persist( $clip );
        }
    }