<?php
namespace console\controllers;

use yii;
use yii\console\Controller;

class RbacController extends Controller 
{
    public function actionInit()
    {
        $auth = yii::$app->authManager;

        $createPost = $auth->createPermission('createPost');
        $createPost->description = 'user can creat a post';
        $auth->add($createPost);

        $updatePost = $auth->createPermission('updatePost');
        $updatePost->description = 'user can update a post';
        $auth->add($updatePost);

        $user = $auth->createRole('user');
        $auth->add($user);

        $author = $auth->createRole('author');
        $auth->add($author);

        $admin = $auth->createRole('admin');
        $auth->add($admin);

        $auth->addChild($author, $createPost);

        $auth->addChild($admin, $author);

        $auth->addChild($admin, $updatePost);
    }
// public function actionCreateAutoRule()
// {
//     $auth = yii::$app->authManager;
//     
//     $rule = new \console\rbac\AuthorRule();
//     $auth->add($rule);
//     
//     $updateOwnPost = $auth->createPermission('updateOwnPost');
// }          
}
?>

