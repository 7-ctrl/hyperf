<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace HyperfTest\Validation\Cases\Stub;

class DemoController
{
    public function signUp(DemoRequest $request)
    {
        return $request->all();
    }

    public function signIn(DemoRequest $request)
    {
        return $request->all();
    }

    public function signOut(DemoRequest $request)
    {
        return $request->all();
    }
}
