import { useState,useEffect } from "react";


const App = () => {

  const [state,setState] = useState(0)

  useEffect(()=>{
    console.log("Component did mount")
  })
 
  return ( 
    <div>
      <h2>{state}</h2>
      <button onClick={()=>setState(prev=>prev+1)} >Click</button>
    </div>
   );
}

 
export default App;
