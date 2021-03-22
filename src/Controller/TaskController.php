<?php

namespace App\Controller;

use DateTime;
use App\Entity\Task;
use JsonSerializable;
use App\Form\TaskType;
use App\Service\NotifierService;
use App\Repository\TaskRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TaskController extends AbstractController
{
    /**
     * @Route("/", name="task_index")
     */
    public function index(NotifierService $notifierService, TaskRepository $taskRepository, Request $request, EntityManagerInterface $em): Response
    {
        $tasks = $taskRepository->findAll();

        $notifications = $notifierService->getTasksDay($tasks);




        return $this->render('home/home.html.twig', [
            'tasks' => $tasks,
            'notifications' => $notifications
        ]);
    }

    /**
     * @Route("/nouvelle-tache", name="task_new", methods={"GET","POST"})
     */
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $task = new Task;
        $name = $request->get('name');
        $desc = $request->get('desc');
        $date = explode("/", $request->get('date'));
        $date = new DateTime($date[2] . '-' . $date[1] . '-' . $date[0]);

        $task->setName($name);
        $task->setDescription($desc);
        $task->setBeginAt($date);

        $em->persist($task);
        $em->flush();


        return new JsonResponse(array('id' => $task->getId(), 'message' => 'tache modifié avec succès'));
    }

    /**
     * @Route("/edit-tache/{id}", name="task_edit", methods={"GET","POST"})
     */
    public function edit(TaskRepository $taskRepository, Task  $task, Request $request, EntityManagerInterface $em): Response
    {

        $name = $request->get('name');
        $desc = $request->get('desc');
        $date = explode("/", $request->get('date'));
        $date = new DateTime($date[2] . '-' . $date[1] . '-' . $date[0]);

        $task->setName($name);
        $task->setDescription($desc);
        $task->setBeginAt($date);

        $em->persist($task);
        $em->flush();
        return new JsonResponse(array('id' => $task->getId(), 'message' => 'tache modifié avec succès'));
    }


    /**
     * @Route("/delete-tache/{id}", name="task_delete", methods={"GET","POST"})
     */
    public function delete(Task $task, Request $request, EntityManagerInterface $em): Response
    {
        try {
            $em->remove($task);
            $em->flush();
            $isSuccess = true;
        } catch (\Throwable $th) {
            $isSuccess = false;
        }

        return new JsonResponse('tache supprimé avec succès', 200);
    }

    /**
     * @Route("/tache/{id}", name="task_get", methods={"GET","POST"})
     */
    public function getTask(Task $task, Request $request): Response
    {
        $date = date_format($task->getBeginAt(), 'd/m/Y');
        $response = array("id" => $task->getId(), "task" => $task->getName(), "desc" => $task->getDescription(), "date" => $date);

        return new JsonResponse($response, 200);
    }
}
