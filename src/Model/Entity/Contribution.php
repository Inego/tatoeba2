<?php
/**
 * Tatoeba Project, free collaborative creation of multilingual corpuses project
 * Copyright (C) 2010 HO Ngoc Phuong Trang
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Contribution extends Entity
{
    protected function _getOldFormat() 
    {
        return [
            'Contribution' => [
                'id' => $this->id,
                'sentence_id' => $this->sentence_id,
                'sentence_lang' => $this->sentence_lang,
                'translation_id' => $this->translation_id,
                'translation_lang' => $this->translation_lang,
                'script' => $this->script,
                'text' => $this->text,
                'action' => $this->action,
                'user_id' => $this->user_id,
                'type' => $this->type,
                'datetime' => $this->datetime,
            ]
        ];
    }
}