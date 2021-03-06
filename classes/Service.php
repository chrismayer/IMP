<?php
/*
 * Copyright (c) 2012, terrestris GmbH & Co. KG
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without 
 * modification, are permitted provided that the following conditions are met:
 * 
 * - Redistributions of source code must retain the above copyright notice, this 
 *   list of conditions and the following disclaimer.
 * - Redistributions in binary form must reproduce the above copyright notice, 
 *   this list of conditions and the following disclaimer in the documentation 
 *   and/or other materials provided with the distribution.
 * - Neither the name of terrestris GmbH & Co. KG nor the names of its 
 *   contributors may be used to endorse or promote products derived from this 
 *   software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" 
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE 
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE 
 * ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE 
 * LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR 
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF 
 * SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS 
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN 
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) 
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE 
 * POSSIBILITY OF SUCH DAMAGE.
 * 
 * BSD-License from http://www.opensource.org/licenses/bsd-license.php
 * 
 */

require_once('MetadataRecord.php');

/**
 * 
 * Service.php
 * 
 * This class represents a metadata set for the ressource type 'Service'
 * 
 * @see MetaDataRecord
 * 
 * @author C. Mayer <mayer@terrestris.de>
 * @author M. Jansen <jansen@terrestris.de>
 * 
 * @version 0.1
 * @since 2011-04-01
 * 
 * @id $Id: Service.php 57 2012-03-14 10:30:18Z mayer $
 * 
 */
class Service extends MetaDataRecord {
     
    /**
     * Service specific tags
     */
    public $operatesOn;
    public $serviceType;
    public $serviceTypeVersion;
    
    /**
     * Returns $operatesOn.
     *
     * @see Service::$operatesOn
     */
    public function getOperatesOn() {
        return $this->operatesOn;
    }
    
    /**
     * Sets $operatesOn.
     *
     * @param object $operatesOn
     * @see Service::$operatesOn
     */
    public function setOperatesOn($operatesOn) {
        $this->operatesOn = $operatesOn;
    }
    
    /**
     * Returns $serviceType.
     *
     * @see Service::$serviceType
     */
    public function getServiceType() {
        return $this->serviceType;
    }
    
    /**
     * Sets $serviceType.
     *
     * @param object $serviceType
     * @see Service::$serviceType
     */
    public function setServiceType($serviceType) {
        $this->serviceType = $serviceType;
    }
    
    /**
     * Returns $serviceTypeVersion.
     *
     * @see Service::$serviceTypeVersion
     */
    public function getServiceTypeVersion() {
        return $this->serviceTypeVersion;
    }
    
    /**
     * Sets $serviceTypeVersion.
     *
     * @param object $serviceTypeVersion
     * @see Service::$serviceTypeVersion
     */
    public function setServiceTypeVersion($serviceTypeVersion) {
        $this->serviceTypeVersion = $serviceTypeVersion;
    }
    
}