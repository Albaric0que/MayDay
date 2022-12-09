<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use App\Models\Emergency;

class EmergencyTest extends TestCase {
    
   /*  public function test_testOk() {
        $this->assertEquals(1,1);
    } */

    public function test_ifGetNameWorkCorrectly() {
       $newEmergency = new Emergency(null, "Lola", "Comment for issue", "Comment for classification", null);

       $resultGetEmergency = $newEmergency->getName();

       $this->assertEquals("Lola", $resultGetEmergency);
    }

    public function test_ifGetIssueWorkCorrectly() {
        $newEmergency = new Emergency(null, "Lola", "Comment for issue", "Comment for classification", null);

        $resultGetEmergency = $newEmergency->getIssue();

        $this->assertEquals("Comment for issue", $resultGetEmergency);
    }

    public function test_ifGetIdWorkCorrectly() {
        $newEmergency = new Emergency(null, "Lola", "Comment for issue", "Comment for classification", null);

        $resultGetEmergency = $newEmergency->getId();

        $this->assertEquals(null, $resultGetEmergency);
    }

     public function test_ifGetClassificationWorkCorrectly() {
        $newEmergency = new Emergency(null, "Lola", "Comment for issue", "Comment for classification", null);

        $resultGetEmergency = $newEmergency->getClassification();

        $this->assertEquals("Comment for classification", $resultGetEmergency);
    }

    public function test_ifGetDateTimeWorkCorrectly() {
        $newEmergency = new Emergency(null, "Lola", "Comment for issue", "Comment for classification", null);

        $resultGetEmergency = $newEmergency->getDateTime();

        $this->assertEquals(null, $resultGetEmergency);
    }


}

