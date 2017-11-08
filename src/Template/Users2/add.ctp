<!-- File: src/Template/Users/add.ctp -->

<h1>Add User</h1>
<?php
    echo $this->Form->create($user);
    echo $this->Form->control('name');
    echo $this->Form->control('email');
    echo $this->Form->control('password');
    echo $this->Form->control('anonymous', ["type" => "radio", "options" => ["1" => __("Anonymous to other students"), "0" => __("Public")], "label" => false]);
    echo $this->Form->button(__('Save user'));
    echo $this->Form->end();
?>
