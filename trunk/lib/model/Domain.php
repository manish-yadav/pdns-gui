<?php

/**
 * Subclass for representing a row from the 'domains' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Domain extends BaseDomain
{
}

sfPropelBehavior::add('Domain', array('audit'));
