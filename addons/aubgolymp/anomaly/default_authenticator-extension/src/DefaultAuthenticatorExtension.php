<?php namespace Anomaly\DefaultAuthenticatorExtension;

use Anomaly\DefaultAuthenticatorExtension\Command\AuthenticateCredentials;
use Anomaly\UsersModule\User\Authenticator\AuthenticatorExtension;

class DefaultAuthenticatorExtension extends AuthenticatorExtension
{
    /**
     * This extension provides...
     *
     * This should contain the dot namespace
     * of the addon this extension is for followed
     * by the purpose.variation of the extension.
     *
     * For example anomaly.module.store::gateway.stripe
     *
     * @var null|string
     */

    protected $provides = 'anomaly.module.users::authenticator.default';

    public function authenticate(array $credentials)
    {
        return $this->dispatch(new AuthenticateCredentials($credentials));
    }

}
