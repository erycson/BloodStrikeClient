<?php

file_put_contents('log/event_'. time() . '.txt', var_export($_GET, true), FILE_APPEND);