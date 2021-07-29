<?php
declare(strict_types=1);

namespace Joem\App;

use Joem\App\Exception\Exception;

Class Session {
	private static $instance;

	public function __construct() {
		if(session_status() == 0) {
			throw new Exception('Sessions are not enabled.');
		}
	}

	/**
	 * Get the singleton instance.
	 *
	 * @return Session
	 */
	public static function get_instance(): Session {
		if(self::$instance !== null) {
			return self::$instance;
		}

		self::$instance = new Session();

		return self::$instance;
	}

	/**
	 * get a value from the session.
	 *
	 * @param string $key
	 * @param mixed|false $default
	 *
	 * @return false|mixed
	 */
	public function get(string $key, mixed $default = false): mixed {
		return isset($_SESSION[$key]) ? $_SESSION[$key] : $default;
	}

	/**
	 * Set a value in the session.
	 *
	 * @param string $key
	 * @param mixed|false $value
	 *
	 * @return Session
	 */
	public function set(string $key, mixed $value = false): Session {
		$_SESSION[$key] = $value;

		return self::$instance;
	}

	/**
	 * Whether or not the index exists in the session.
	 *
	 * @param string $key
	 *
	 * @return bool
	 */
	public function has(string $key): bool {
		return isset($_SESSION[$key]);
	}
}

?>
