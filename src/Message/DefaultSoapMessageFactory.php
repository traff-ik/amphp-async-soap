<?php

/**
 * Created by IntelliJ IDEA.
 *
 * PHP version 7.4
 *
 * @category amphp-async-soap
 * @author   Oleg Tikhonov <o.tikhonov@nexta.pro>
 */

declare(strict_types=1);

namespace Traff\Soap\Message;

use Traff\Soap\Options;

/**
 * SOAP message wrapper default factory.
 *
 * @package Traff\Soap\Message
 */
final class DefaultSoapMessageFactory implements SoapMessageFactoryInterface
{
    /**
     * @inheritDoc
     *
     * @throws \SoapFault
     */
    public function createMessage(?string $wsdl, Options $options): SoapMessageInterface
    {
        return new SoapMessage($wsdl, $options->toArray());
    }
}
