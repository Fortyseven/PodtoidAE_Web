<?php

    namespace SoundboardBundle\Controller;

    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Response;

    class DefaultController extends Controller
    {
        /**
         * @Route("/")
         * @Template()
         */
        public function indexAction()
        {
            $man  = $this->getDoctrine()->getManager();
            $cats = $man->getRepository( "SoundboardBundle:Category" )->findAll();

            $out_struct = [ ];

            foreach ( $cats as $cat ) {
                $arr = [ ];

                $clips = $man->getRepository( "SoundboardBundle:Soundclip" )->findBy( [ "category" => $cat ] );

                foreach ( $clips as $clip ) {
                    $arr[ ] = [
                            "title"       => $clip->getTitle(),
                            "short_title" => $clip->getShortTitle(),
                            "path"        => $clip->getPath()
                    ];
                }

                $out_struct[ "category" ][ $cat->getName() ][ "clips" ] = $arr;
            }

            return [ "data" => $out_struct ];
        }

        /**
         * @Route("/contents")
         */
        public function contentsAction()
        {
            $man  = $this->getDoctrine()->getManager();
            $cats = $man->getRepository( "SoundboardBundle:Category" )->findAll();

            $out_struct = [ ];

            foreach ( $cats as $cat ) {
                $arr = [ ];

                $clips = $man->getRepository( "SoundboardBundle:Soundclip" )->findBy( [ "category" => $cat ] );
                
                foreach ( $clips as $clip ) {
                    $arr[ ] = [
                            "title"       => $clip->getTitle(),
                            "short_title" => $clip->getShortTitle(),
                            "path"        => $clip->getPath()
                    ];
                }

                $out_struct[ "category" ][ $cat->getName() ][ "clips" ] = $arr;
            }

            return new Response( json_encode( $out_struct ) );
        }
    }
