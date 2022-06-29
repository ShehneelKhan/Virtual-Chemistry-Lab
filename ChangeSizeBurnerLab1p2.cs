using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
using UnityEngine.SceneManagement;



public class ChangeSizeBurnerLab1p2 : MonoBehaviour
{
   
     // Specifying when object is dragged
    public GameObject thermometer_2;
    public GameObject thermometer;
    public GameObject fireAnimation;
    public GameObject tick_2;
    public GameObject glass_tube;
    public GameObject glass_tube2;
    public GameObject resultBox;
    public GameObject bubble;
    public GameObject rod;
    public GameObject red_rod;
    public GameObject bend_rod;
    public GameObject black_rod;

    public bool is_bended;

    public GameObject rod_shadow;

    public Text conc_heading;
    public Text conc_text;
    public Text conc_text2;
   // public Text countdownText;

    public int count = 0;


    public int red_count;
    public float temp = 0;
    public float bar = 0;

    public Text temperatureText;
    public static float updatedTemperature;

    public Button bendbutton;

    public Image TemperatureBar;
    public float maxTemperature;


    public static GameObject smoke;
    public Text resultText;


    float currentTime = 0f;
    float startingTime = 10f;


    [SerializeField] Text countdownText;

    void Start(){
         currentTime = startingTime;
         bendbutton.interactable = false;
         red_count = 0;
         is_bended=false;

         
    }


    void Update(){
       

        if(red_rod.activeInHierarchy==true){

                countdownText.gameObject.SetActive(true);

                currentTime -= 1 * Time.deltaTime;
                countdownText.text = currentTime.ToString("0");
                

                if(currentTime <= 3){
                    countdownText.color = Color.red;
                }


                if(currentTime <= 0){
                    currentTime = 0;
                }

        }

        


    //     if(fireAnimation.activeInHierarchy == true){

    //         resultText.gameObject.SetActive(false);


    //         if(temp>30){
    //             smoke.SetActive(true);
    //         }

    //         if(temp>=77){
    //             bubble.SetActive(true);
    //         }

    //         // if(temp>=60){
    //         //     glass_tube.SetActive(false);
    //         //     glass_tube2.SetActive(true);
    //         // }

    //         if(temp>80){
    //             temperatureText.color= new Color(255,0,0);
    //         }

            
            
    //       temp+=0.01f;
    //       bar+=0.0001f;
       
    //     temperatureText.text = temp + " *C";
    //     TemperatureBar.fillAmount = bar;





    //         conc_heading.gameObject.SetActive(false);
    //             conc_text.gameObject.SetActive(false);

    //             conc_result.text = temp.ToString() + " *C";
    //             conc_result.gameObject.SetActive(false);

    //             resultBox.SetActive(false);
    //     }
    

    //     else if(fireAnimation.activeInHierarchy == false){




            

    //         if(temp >=77 && temp <=79){
    //             temperatureText.text = temp + " *C";
    //             temperatureText.color= new Color(0,128,0); //green
                
    //             resultText.text = "Success";
    //             resultText.color = new Color(0,128,0);
    //             resultText.gameObject.SetActive(true);

    //             tick_2.SetActive(true);
                

    //             conc_heading.gameObject.SetActive(true);
    //             conc_text.gameObject.SetActive(true);

    //             conc_result.text = temp.ToString() + " *C";
    //             conc_result.gameObject.SetActive(true);
    //             resultBox.SetActive(true);
               
              
        
    //         }

     

    //         else if(temp>80){
    //             temperatureText.text = temp + " *C";
    //             temperatureText.color= new Color(255,0,0);
    //             resultText.text = "Failed...Try Again!";
    //             resultText.color = new Color(255,0,0);
    //             resultText.gameObject.SetActive(true);
    //             tick_2.SetActive(false);


    //              conc_heading.gameObject.SetActive(true);
    //             conc_text.gameObject.SetActive(true);

    //             conc_result.text = temp.ToString() + " *C";
    //             conc_result.gameObject.SetActive(true);
    //             resultBox.SetActive(true);
    //         }

            

    //         else {
    //             if(temp <= 0.1f){
    //                 temperatureText.text = temp + " *C";
    //             }

    //             else{
    //             temp-=0.01f;
    //             bar-=0.0001f;
            
    //             temperatureText.text = temp + " *C";
    //             TemperatureBar.fillAmount = bar;
    //             }
    //         }

    //     }
       

    //  }

     

    }


    void OnMouseDown() {

         float posBurner = transform.position.x;
        if(count>0){

            Debug.Log("GGM");
            if(fireAnimation.activeInHierarchy == true){  //FIRE OFF
            fireAnimation.SetActive(false);
            bendbutton.interactable = false;   
            countdownText.enabled=false;
            
          
           
        }
        

            else if(fireAnimation.activeInHierarchy == false){      //FIRE ON
            if(posBurner==-3.01f){
                if(red_count==0){
                    red_rod.SetActive(true);
                }

                if(is_bended==true){
                    countdownText.enabled=false;
                }

                if(is_bended==false){
                    countdownText.enabled=true;
                }
                fireAnimation.SetActive(true);
                rod.SetActive(false);
               
                bendbutton.interactable = true;
                red_count+=1;
                Update();

            }

               

           
        }

        }   
        

        else{
       
        transform.localScale = new Vector3 (1.237515f,0.588892f,0);
        count+=1;  
        }

        

        // if(sceneName=="Lab1"){
        //      transform.localScale = new Vector3 (1.237515f,0.588892f,0);
        //      count+=1;
        // }
       


     
     }


     public void Bend(){
          if(currentTime>0){
              red_rod.SetActive(false);
              rod_shadow.SetActive(false);
              bend_rod.SetActive(true);
              countdownText.enabled = false;
              tick_2.SetActive(true);
              conc_heading.gameObject.SetActive(true);
              conc_text.gameObject.SetActive(true);
              bendbutton.interactable=false;
              fireAnimation.SetActive(false);
              Destroy(fireAnimation);
    

            }

            else{
                  red_rod.SetActive(false);
                  rod_shadow.SetActive(false);
                  black_rod.SetActive(true);                
                  countdownText.enabled = false;
                  conc_heading.gameObject.SetActive(true);
                  conc_text2.gameObject.SetActive(true);
                  bendbutton.interactable=false;
            }

        is_bended=true;
     }


    
    
}




