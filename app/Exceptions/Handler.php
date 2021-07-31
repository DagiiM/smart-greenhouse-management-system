<?php

namespace App\Exceptions;

use Throwable;
use App\Traits\WebResponser;
use Swift_TransportException;
use Illuminate\Database\QueryException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;


class Handler extends ExceptionHandler
{
  use WebResponser;
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        \Illuminate\Auth\AuthenticationException::class,
        \Illuminate\Auth\Access\AuthorizationException::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class,
        \Illuminate\Database\Eloquent\ModelNotFoundException::class,
        \Illuminate\Session\TokenMismatchException::class,
        \Illuminate\Validation\ValidationException::class,
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
      //
    }

    public function render($request, Throwable $exception)
    {
      //ModelNotFoundException
        if ($exception instanceof ModelNotFoundException)
        {
          $modelName=strtolower(class_basename($exception->getModel()));

          return back()->with('error','The '.$modelName.' in reference is not found');
        }
        //MethodNotAllowedHttpException
        if ($exception instanceof MethodNotAllowedHttpException)
         {
           return back()->with('error',$exception->getMessage());
        }

        //ValidationException
        if ($exception instanceof ValidationException )
        {
          return $this->convertValidationExceptionToResponse($exception,$request);
        }
        //TokenMismatchException
        if ($exception instanceof TokenMismatchException )
        {
          return redirect()->back()->withInput($request->input());
        }
        //AuthenticationExceptions
        if ($exception instanceof AuthenticationException )
        {
          return $this->unauthenticated($request,$exception);
        }
        //AuthorizationException
        if ($exception instanceof AuthorizationException)
         {
           return back()->with('error',$exception->getMessage());
        }
        //NotFoundHttpException
        if ($exception instanceof NotFoundHttpException)
         {
            return back()->with('error','The specified url cannot be found. Please take another look..');
         }

        //Generic HttpException
        if ($exception instanceof HttpException)
        {
          return back()->with('error',$exception->getMessage());
         }
            //Swift_TransportException
        if ($exception instanceof Swift_TransportException)
         {
           return back()->with('error','Email Network Connection Service Error. Please Try Again Later.');
           }

        //Generic QueryException
        if ($exception instanceof QueryException)
        {

          if ($exception->errorInfo[1]==1062)
          {
            return back()->with('error','Already Exists');
          }

            if($exception->errorInfo[1]==1451)
            {
               return back()->with('error','Cannot remove this Resource Permanently. It is related to another resource');
            }
           if(config('app.debug'))
           {
             return parent::render($request,$exception);
           }
           return back()->with('error','This is Unexpected Exception. Please Try again Later');
        }
      }

        protected function convertValidationExceptionToResponse(ValidationException $e,$request)
        {

          $errors=$e->validator->errors()->getMessages();

         return back()->withInput($request->input())->withErrors($errors);

       }

    /**
     * Convert an authenticated exception into an authenticated response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Middleware\Authenticate\AuthenticationException  $exception
     * @return \Illuminate\Http\Response
     */

     protected function unauthenticated($request,AuthenticationException $exception)
     {

       if ($this->isFrontend($request))
        {
          return redirect()->guest('login');
       }
      return back()->with('error','Authentication Failed');
     }

     private function isFrontend($request)
     {
       return $request->acceptsHtml() && collect($request->route()->middleware())->contains('web');
     }

}
