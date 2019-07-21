<h1>About US</h1>

 <form action="echo.php" class="repeater" enctype="multipart/form-data">
      <div data-repeater-list="group-a">
        <div data-repeater-item>
          <input name="untyped-input" value="A"/>
    
          <input type="text" name="text-input" value="A"/>
    
          <input type="date" name="date-input"/>
    
          <textarea name="textarea-input">A</textarea>
    
          <input type="radio" name="radio-input" value="A" checked/>
          <input type="radio" name="radio-input" value="B"/>
    
          <input type="checkbox" name="checkbox-input" value="A" checked/>
          <input type="checkbox" name="checkbox-input" value="B"/>
    
          <select name="select-input">
            <option value="A" selected>A</option>
            <option value="B">B</option>
          </select>
    
          <select name="multiple-select-input" multiple>
            <option value="A" selected>A</option>
            <option value="B" selected>B</option>
          </select>
    
          <input data-repeater-delete type="button" value="Delete"/>
        </div>
        <div data-repeater-item>
          <input name="untyped-input" value="A"/>
    
          <input type="text" name="text-input" value="B"/>
    
          <input type="date" name="date-input"/>
    
          <textarea name="textarea-input">B</textarea>
    
          <input type="radio" name="radio-input" value="A" />
          <input type="radio" name="radio-input" value="B" checked/>
    
          <input type="checkbox" name="checkbox-input" value="A"/>
          <input type="checkbox" name="checkbox-input" value="B" checked/>
    
          <select name="select-input">
            <option value="A">A</option>
            <option value="B" selected>B</option>
          </select>
    
          <select name="multiple-select-input" multiple>
            <option value="A" selected>A</option>
            <option value="B" selected>B</option>
          </select>
    
          <input data-repeater-delete type="button" value="Delete"/>
        </div>
      </div>
      <input data-repeater-create type="button" value="Add"/>
    </form>
    
   

<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

<script src="{{ asset('js/repeater/jquery.repeater.js') }}"></script>

<script>
 $(document).ready(function () {
        'use strict';

        $('.repeater').repeater({
            defaultValues: {
                'textarea-input': 'foo',
                'text-input': 'bar',
                'select-input': 'B',
                'checkbox-input': ['A', 'B'],
                'radio-input': 'B'
            },
            show: function () {
                $(this).slideDown();
            },
            hide: function (deleteElement) {
                if(confirm('Are you sure you want to delete this element?')) {
                    $(this).slideUp(deleteElement);
                }
            },
            ready: function (setIndexes) {

            }
        });
     
 });
</script>