using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
using UnityEngine.SceneManagement;



public class ChangeSizeBurner : MonoBehaviour
{
   
     // Specifying when object is dragged
    public GameObject thermometer;
    public GameObject thermometer_2;
    public GameObject fireAnimation;
    public GameObject tick_2;
    public GameObject glass_tube;
    public GameObject glass_tube2;
    public GameObject resultBox;
    public GameObject bubble;

    public Text conc_heading;
    public Text conc_text;
    public Text conc_result;

    public int count = 0;



    public float temp = 0;
    public float bar = 0;

    public Text temperatureText;
    public static float updatedTemperature;

    public Image TemperatureBar;
    public float maxTemperature;


    public static GameObject smoke;
    public Text resultText;

    public string sceneName;
    private Scene currentScene;

    void Start(){
    // Create a temporary reference to the current scene.
     currentScene = SceneManager.GetActiveScene();
      // Retrieve the name of this scene.
      sceneName = currentScene.name;

    }

    void Update(){

        if(glass_tube!=null){

         if(temp<=60){
                glass_tube.SetActive(true);
                glass_tube2.SetActive(false);
            }
        
        

        if(fireAnimation.activeInHierarchy == true){

            resultText.gameObject.SetActive(false);


            if(temp>30){
                smoke.SetActive(true);
            }

            if(temp>=77){
                bubble.SetActive(true);
            }

            // if(temp>=60){
            //     glass_tube.SetActive(false);
            //     glass_tube2.SetActive(true);
            // }

            if(temp>80){
                temperatureText.color= new Color(255,0,0);
            }

            
            
          temp+=0.01f;
          bar+=0.0001f;
       
        temperatureText.text = temp + " *C";
        TemperatureBar.fillAmount = bar;





            conc_heading.gameObject.SetActive(false);
                conc_text.gameObject.SetActive(false);

                conc_result.text = temp.ToString() + " *C";
                conc_result.gameObject.SetActive(false);

                resultBox.SetActive(false);
        }
    

        else if(fireAnimation.activeInHierarchy == false){



            if(temp >=77 && temp <=79){
                temperatureText.text = temp + " *C";
                temperatureText.color= new Color(0,128,0); //green
                
                resultText.text = "Success";
                resultText.color = new Color(0,128,0);
                resultText.gameObject.SetActive(true);

                tick_2.SetActive(true);
                

                conc_heading.gameObject.SetActive(true);
                conc_text.gameObject.SetActive(true);

                conc_result.text = temp.ToString() + " *C";
                conc_result.gameObject.SetActive(true);
                resultBox.SetActive(true);
               
              
        
            }

     

            else if(temp>80){
                temperatureText.text = temp + " *C";
                temperatureText.color= new Color(255,0,0);
                resultText.text = "Failed...Try Again!";
                resultText.color = new Color(255,0,0);
                resultText.gameObject.SetActive(true);
                tick_2.SetActive(false);


                 conc_heading.gameObject.SetActive(true);
                conc_text.gameObject.SetActive(true);

                conc_result.text = temp.ToString() + " *C";
                conc_result.gameObject.SetActive(true);
                resultBox.SetActive(true);
            }

            

            else {
                if(temp <= 0.1f){
                    temperatureText.text = temp + " *C";
                }

                else{
                temp-=0.01f;
                bar-=0.0001f;
            
                temperatureText.text = temp + " *C";
                TemperatureBar.fillAmount = bar;
                }
            }

        }
       

     }

     
    }



    void OnMouseDown() {

        if(count>0){

            Debug.Log("GGM");
            if(fireAnimation.activeInHierarchy == true){  //FIRE OFF
            fireAnimation.SetActive(false);
          
           
        }
        

            else if(fireAnimation.activeInHierarchy == false){      //FIRE ON
                fireAnimation.SetActive(true);
                thermometer.SetActive(false);
                thermometer_2.SetActive(true);
                Update();

               

           
        }
            
        }
       
        else {
        

        // if(sceneName=="Lab1"){
        //      transform.localScale = new Vector3 (1.237515f,0.588892f,0);
        //      count+=1;
        // }
        transform.localScale = new Vector3 (0.3f,0.17f,0);
        count+=1;

     } 
     
     }


    


}

