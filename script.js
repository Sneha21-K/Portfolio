<script>
  const mongoose = require('mongoose');
  const DB = 'mongodb+srv://snehakamthekar2227:Portfolio21@cluster0.1sp53ui.mongodb.net/Sneha?retryWrites=true&w=majority'
  mongoose.connect(DB,{
    useNewUrlParser: true,
    useCreateIndex:true,
    useUnifiedTopology:true,
    useFindAndModify:false

  }).then(() = {
console.log('connection successfull');
}).catch((err))= console.log('no connection');

  </script>
