(function(){
  
  var chat = {
    messageToSend: '',
    messageResponses:'cccccccccccccccc',

    init: function() {
      this.cacheDOM();
      this.bindEvents();
      this.render();
    },
    cacheDOM: function() {
      this.$chatHistory = $('.chat-history');

      this.$button = $('button');
      this.$button1 = $('#btn_1');

      this.$textarea = $('#message-to-send');
       this.$textarea1 = $('#message-to-send1');

      this.$chatHistoryList =  this.$chatHistory.find('ul');
    },
    bindEvents: function() {

      this.$button.on('click', this.addMessage.bind(this));
      this.$button1.on('click', this.addMessage1.bind(this));

      this.$textarea.on('keyup', this.addMessageEnter.bind(this));
      this.$textarea1.on('keyup', this.addMessageEnter1.bind(this));

    },


    render: function() {

      //this.scrollToBottom();
      if (this.messageToSend.trim() !== '') {
        var template = Handlebars.compile( $("#message-template").html());
        var context = { 
          messageOutput: this.messageToSend,
          time: this.getCurrentTime()
        };

        this.$chatHistoryList.append(template(context));
        this.scrollToBottom();
        this.$textarea.val('');
        
        // responses
          
      }

     this.scrollToBottom();
       if (this.messageResponses.trim() !== '') {

         var templateResponse = Handlebars.compile( $("#message-response-template").html());
        var contextResponse = { 
          response: this.messageResponses,
          time: this.getCurrentTime()
        };
        
        
          this.$chatHistoryList.append(templateResponse(contextResponse));
          this.scrollToBottom();
          this.$textarea1.val('');
        
       }
      
      
    },
    
    addMessage: function() {
      this.messageToSend = this.$textarea.val()
      this.render();         
    },
    
    addMessageEnter: function(event) {
        // enter was pressed
        if (event.keyCode === 13) {
          this.addMessage();
        }
    },



    addMessage1: function() {
      this.messageResponses = this.$textarea1.val()
      this.render();         
    },


    addMessageEnter1: function(event) {
        // enter was pressed
        if (event.keyCode === 13) {
          this.addMessage1();
        }
    },







    scrollToBottom: function() {
       this.$chatHistory.scrollTop(this.$chatHistory[0].scrollHeight);
    },
    getCurrentTime: function() {
      return new Date().toLocaleTimeString().
              replace(/([\d]+:[\d]{2})(:[\d]{2})(.*)/, "$1$3");
    },
    getRandomItem: function(arr) {
      return arr[Math.floor(Math.random()*arr.length)];
    }
    
  };
  
  chat.init();
  
  var searchFilter = {
    options: { valueNames: ['name'] },
    init: function() {
      var userList = new List('people-list', this.options);
      var noItems = $('<li id="no-items-found">No items found</li>');
      
      userList.on('updated', function(list) {
        if (list.matchingItems.length === 0) {
          $(list.list).append(noItems);
        } else {
          noItems.detach();
        }
      });
    }
  };
  
  searchFilter.init();
  
})();