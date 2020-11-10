<h1 class="mb-5">Create task</h1>
<form method="post" action="">
    <div class="form-group">
        <label for="exampleInputText">Text</label>
        <input type="text" name="username" value="<?php echo $data['username'] ?? '' ?>" class="form-control <?php echo $errors['username'] ? 'is-invalid' : '' ?>" rows="6" id="exampleInputText" placeholder="Username">
        <div class="invalid-feedback">
            <?php echo $errors['username'] ?>
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail">Email address</label>
        <input type="email" name="email" value="<?php echo $data['email'] ?? '' ?>" class="form-control <?php echo $errors['email'] ? 'is-invalid' : '' ?>" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter email">
        <div class="invalid-feedback">
            <?php echo $errors['email'] ?>
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputText">Text</label>
        <textarea name="text" value="<?php echo $model->text ?? '' ?>" class="form-control <?php echo $errors['text'] ? 'is-invalid' : '' ?>" rows="6" id="exampleInputText" placeholder="Text of task"></textarea>
        <div class="invalid-feedback">
            <?php echo $errors['text'] ?>
        </div>
    </div>
    <div class="form-check">
        <input type="hidden" name="done" value="0">
        <input type="checkbox" name="done" <?php echo isset($data['done']) && $data['done'] ? 'checked' : '' ?> value="1" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Done?</label>
    </div>
    <button type="submit" class="btn btn-primary mt-4">Create</button>
</form>