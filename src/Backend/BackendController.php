<?php

namespace Mustang\Backend;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\ClientInterface;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use GuzzleHttp\Psr7\MultipartStream;
use Swagger\Client\ObjectSerializer;
use Swagger\Client\Api\MustangControllerApi;


class BackendController extends MustangControllerApi
{
	/**
	 * @var ClientInterface
	 */
	public $client;

	/**
	 * @var Configuration
	 */
	public $config;

	/**
	 * @var HeaderSelector
	 */
	public $headerSelector;

	/**
	 * @var $path
	 */
	public $path = "";

	/**
	 * @param ClientInterface $client
	 * @param Configuration   $config
	 * @param HeaderSelector  $selector
	 */
	public function __construct(
		ClientInterface $client = null,
		Configuration $config = null,
		HeaderSelector $selector = null
	) {
		$this->client = $client ?: new Client();
		$this->config = $config ?: new Configuration();
		$this->headerSelector = $selector ?: new HeaderSelector();
	}

	/**
	 * Create request for operation 'ping'
	 *
	 * @param  string $username (optional)
	 *
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function setPath($path = "")
	{
		$this->path = $path;

		return $this;
	}


	/**
	 * Create request for operation 'ping'
	 *
	 * @param  string $username (optional)
	 *
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function testRequest()
	{
		return new Request(
			'GET',
			$this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
			$headers,
			$httpBody
		);

		return $this->client->get($this->config->getHost() . $this->path);
	}
}
