<?php
 return [
     'general' => [
         'enum_module' => [
             'baptist' => 'Baptism',
             'funeral' => 'Funeral',
             'wedding' => 'Wedding',

             'plural' => [
                 'baptist' => 'Baptisms',
                 'funeral' => 'Funerals',
                 'wedding' => 'Weddings',
             ],
         ],
     ],
     'actions' => [
         'scheduler' => [
             'modal' => [
                 'heading' => 'Slots for :module',
                 'description' => 'Set available slots for each day for slots :module',
             ],
             'label' => [
                 'button' => 'Slots :module',
                 'submit' => 'Save',
                 'add_slot' => 'Add slot',
             ],
             'notification' => [
                 'success' => 'Slots for :module saved successfully.',
                 'failed' => 'Error, please try again',
             ],
         ],
     ],
 ];
