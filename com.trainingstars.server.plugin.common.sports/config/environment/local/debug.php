<?php

/**
 * Debug Level:
 *
 * Production Mode:
 * false: No error messages, errors, or warnings shown.
 *
 * Development Mode:
 * true: Errors and warnings shown.
 */
return ['debug' => filter_var(env('DEBUG', true), FILTER_VALIDATE_BOOLEAN)];