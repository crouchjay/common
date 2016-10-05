<?php
namespace Coaches\Model\Entity;

use Cake\ORM\Entity;
use FSM\FSM\TSFiniteStateMachine;
use CoachesFSM\CoachSearch\CoachSearchFSM;

/**
 * TSFSMEntity Entity
 *
 * @property string $state
 * @property TSFiniteStateMachine $fsm
 * 
 */
trait CoachSearchFSMEntityTrait {

	use TSFSMEntityTrait;
	
	protected function getStateMachine(): TSFiniteStateMachine {
		return CoachSearchFSM::getInstance();
	}
}