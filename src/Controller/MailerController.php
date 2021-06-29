<?php


namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mime\Email;
use App\Repository\ContactRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mime\Message;


class MailerController extends AbstractController
{
    /**
     * @Route("/email", name="emailcontact")
     */
    public function sendEmail(MailerInterface $mailer,
                              ContactRepository $contactRepository, Request $request): Response
    {
        $nom = $request->request->get('nom');
        $prenom = $request->request->get('prenom');
        $mailclient = $request->request->get('email');
        $telclient = $request->request->get('tel');
        $objet =  $request->request->get('objet');
        $message = $request->request->get('message');

        $contact = $contactRepository->find(1);
        $address = $contact->getEmail();

        $email = (new Email())
            ->from('infos@interaxys.fr')
            ->to($address)
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Nouvelle demande de contact : '.$nom.' '.$prenom)
            ->html('<h1>Une nouvelle de demande de contact est arrivée !</h1>
                         <h2>Consultez dès à présent celle-ci.</h2>
                         <br>
                         <p>'.$nom.' '.$prenom.'<br>
                         Email : '.$mailclient.'<br>
                         Téléphone : '.$telclient.'<br></p>
                         <br>
                         <p>Objet : '.$objet.'</p>
                         <br>
                         <p>'.$message.'</p>');

        $mailer->send($email);
        return $this->render('mail.html.twig');
    }
}