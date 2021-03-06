<?php
/**
 * Copyright (c) 2011 Cyso Managed Hosting < development [at] cyso . nl >
 * Copyright (c) 2009 Paul James
 *
 * This file is part of TonicDNS.
 *
 * TonicDNS is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * TonicDNS is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with TonicDNS.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once("load.php");

// handle request
$request = new Request();
$resource = $request->loadResource();
$response = $resource->exec($request);
$response->output();

?>
