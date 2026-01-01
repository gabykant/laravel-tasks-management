<?php

namespace App\Http\Controllers;

/**
 * @OA\Info(
 *     title="Laravel Auth API (Sanctum)",
 *     version="1.0.0",
 *     description="Secure Laravel REST API using Sanctum",
 *     @OA\Contact(
 *         name="Gabriel Kwaye - K Soft Solutions / Upwork",
 *         email="g.kwaye@ksoft-solutions.com",
 *         url="https://www.upwork.com/freelancers/~01b294ea71fb12952f"
 *     ),
 *     @OA\License(
 *         name="MIT License",
 *         url="https://opensource.org/licenses/MIT"
 *     )
 * ),
 * @OA\Server(
 *    url="http://localhost:8050",
 *   description="Local Development Server"
 * ),
 * @OA\SecurityScheme(
 *      type="http",
 *      description="Use a bearer token to access these endpoints. You can obtain a token by registering or logging in.",
 *      name="Authorization",
 *      in="header",
 *      scheme="bearer",
 *      bearerFormat="JWT",
 *      securityScheme="sanctum",
 * )
 */
abstract class Controller
{
    //
}
