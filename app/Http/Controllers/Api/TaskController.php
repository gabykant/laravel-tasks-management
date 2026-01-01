<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;

class TaskController extends Controller
{
    /**
     * @OA\Get(
     *   path="/api/tasks",
     *   tags={"Tasks"},
     *   security={{"sanctum":{}}},
     *   summary="List user tasks",
     *   @OA\Response(response=200, description="Tasks list")
     * )
     */
    public function index(Request $request)
    {
        return response()->json(
            $request->user()->tasks()->latest()->get()
        );
    }

    /**
     * @OA\Post(
     *   path="/api/tasks",
     *   tags={"Tasks"},
     *   security={{"sanctum":{}}},
     *   summary="Create a task",
     *   @OA\Response(response=201, description="Task created")
     * )
     */
    public function store(StoreTaskRequest $request)
    {
        $task = $request->user()->tasks()->create(
            $request->validated()
        );

        return response()->json($task, 201);
    }

    /**
     * @OA\Get(
     *   path="/api/tasks/{id}",
     *   tags={"Tasks"},
     *   security={{"sanctum":{}}},
     *   summary="Show a task",
     *   @OA\Response(response=200, description="Task details")
     * )
     */
    public function show(Task $task)
    {
        $this->authorizeTask($task);

        return response()->json($task);
    }

    /**
     * @OA\Put(
     *   path="/api/tasks/{id}",
     *   tags={"Tasks"},
     *   security={{"sanctum":{}}},
     *   summary="Update a task",
     *   @OA\Response(response=200, description="Task updated")
     * )
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        $this->authorizeTask($task);

        $task->update($request->validated());

        return response()->json($task);
    }

    /**
     * @OA\Delete(
     *   path="/api/tasks/{id}",
     *   tags={"Tasks"},
     *   security={{"sanctum":{}}},
     *   summary="Delete a task",
     *   @OA\Response(response=204, description="Task deleted")
     * )
     */
    public function destroy(Task $task)
    {
        $this->authorizeTask($task);

        $task->delete();

        return response()->json(null, 204);
    }

    private function authorizeTask(Task $task)
    {
        if ($task->user_id !== auth()->id()) {
            abort(403, 'Unauthorized');
        }
    }
}
